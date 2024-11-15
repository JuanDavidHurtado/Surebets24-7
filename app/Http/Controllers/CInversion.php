<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;



class CInversion extends Controller
{

    public function listar()
    {
        $sql = "SELECT * FROM inversion AS i WHERE i.invEstado = 'ACTIVO'";
        $data = DB::select($sql);


        foreach ($data as $producto) {

            // Verifica si hay una imagen y codifícala en base64
            if ($producto->imagen) {
                $imagenBase64 = base64_encode($producto->imagen);
                // Sobrescribe el valor de la imagen con su versión codificada en base64
                $producto->imagen = $imagenBase64;
            }
        }
        return response()->json($data);
    }

    public function seleccion_plan($id)
    {

        $id = base64_decode($id);

        $sql = "SELECT * FROM inversion AS i
        WHERE i.idInversion = '$id'";
        $data = DB::select($sql);

        // Eliminar la columna 'imagen' de cada elemento en el resultado
        foreach ($data as &$item) {
            unset($item->imagen);
        }

        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        DB::beginTransaction();

        try {
            //$fecha_pago = $request->input('fecha_pago');
            //$hash = $request->input('hash');
            $metodo = $request->input('metodo_pago');
            $fecha_pago = $request->input('fecha_pago');
            $hash = $request->input('hash');
            $pago_metodo = 'criptomonedas';
            $usuario = $request->input('id'); //id inicio sesion

            // Buscar registros en la tabla usuario_inversion
            $registroActivo = DB::table('usuario_inversion')
                ->where('usuario_idUsuario', $usuario)
                ->whereIn('usu_inv_estado', ['PENDIENTE', 'EN PROCESO'])
                ->exists();

            if ($registroActivo) {
                // Retornar mensaje indicando que ya existe un registro activo
                return response()->json([
                    'status' => 201,
                    'message' => 'En este momento no puedes realizar la petición, debido a que ya existe un registro activo.'
                ], 201);
            }


            if ($metodo == 'fichas') {
                $fecha_pago = date('y-m-d'); //$request->input('fecha_pago');
                $hash = 'Pago realizado mediante fichas';
                $pago_metodo = 'fichas';
            }




            $idPagoInsertado = DB::table('pago')->insertGetId([
                'pagFecha' => $fecha_pago,
                'pagHash' => $hash,
                'pagoMetodo' => $pago_metodo
            ]);

            $producto = base64_decode($request->input('id_pro'));
            $fecha_inicio = date('Y-m-d');


            $sql_inv = "SELECT * FROM inversion AS inv
            WHERE inv.idInversion = '$producto'";
            $data_inv = DB::select($sql_inv);

            $intervalo_dias = $data_inv[0]->invDias;

            // Calcular la fecha final sin contar los sábados y domingos
            $fecha_final = strtotime($fecha_inicio); // Convertir la fecha inicial a un timestamp
            $dias_laborables = 0;

            // Bucle para agregar los días laborables
            while ($dias_laborables < $intervalo_dias) {
                // Incrementa la fecha en un día
                $fecha_final = strtotime('+1 day', $fecha_final);

                // Verifica si el día es laborable (lunes a viernes)
                if (date('N', $fecha_final) < 6) {
                    $dias_laborables++;
                }
            }

            // Formatea la fecha final como YYYY-MM-DD
            $fecha_fin = date('Y-m-d', $fecha_final);

            $fecha_fin = date('Y-m-d', strtotime($fecha_inicio . " + $intervalo_dias days"));

            //$fecha_fin = date('Y-m-d', strtotime('+' . $dias . ' days'));

            $idInvInsertado = DB::table('usuario_inversion')->insertGetId([
                'inv_fecha_inicio' => $fecha_inicio,
                'inv_fecha_final' => $fecha_fin,
                'inv_dias' => $intervalo_dias,
                'usuario_idUsuario' => $usuario,
                'inversion_idInversion' => $producto,
                'pago_idPago' => $idPagoInsertado
            ]);

            $paymentAmount = $data_inv[0]->invValor * 0.10;

            for ($i = 1; $i <= 12; $i++) {
                // Calcular la fecha del pago sumando meses a la fecha actual
                $paymentDate = date('Y-m-d', strtotime("+$i month", strtotime($fecha_inicio)));

                // Insertar el pago en la tabla 'payment'
                DB::table('payment')->insert([
                    'payment_number' => $i,  // Número del pago (1 al 12)
                    'amount' => $paymentAmount,  // Monto del pago (10% del valor de la inversión)
                    'payment_date' => $paymentDate,  // Fecha del pago
                    'status' => 'pending',  // Estado inicial del pago
                    'investment_id' => $idInvInsertado,  // Relación con la inversión
                ]);
            }

            // validacion que tenga inversiones anteriorermente para actualizar posicion nodo
            $registroFinalizado = DB::table('usuario_inversion')
                ->where('usuario_idUsuario', $usuario)
                ->whereIn('usu_inv_estado', ['FINALIZADO'])
                ->get();

            if ($registroFinalizado->isNotEmpty()) {
                $updatePosicionNodo = DB::table('posicion_nodo_usuinv')
                    ->where('usr_referido_id', $usuario)
                    ->where('estado_posicion', 'SELECCIONADO')
                    ->update(['estado_posicion' => 'ANULADO']);
            } else {
                $updatePosicionNodo = DB::table('posicion_nodo_usuinv')
                    ->where('usr_referido_id', $usuario)
                    ->where('estado_posicion', 'SELECCIONADO')
                    ->update(['estado_posicion' => 'PENDIENTE']);
            }


            //update donde voy almacenar id patrocinador
            $sql = "SELECT * FROM usuario AS u
            WHERE 
            u.idUsuario = '$usuario'";
            $data = DB::select($sql);

            // Renderiza la vista a una cadena de texto
            $cuerpo = View::make('emails.inversion')->render();

            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Inversion Surebets';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);


            if (sizeof($data) > 0 && $data[0]->usuPatrocinador != NULL) {

                $des = 'Rentabilizacion obtenida por medio del usuario ' . $data[0]->usuLogin . ' ,por la inversion de ' . $data_inv[0]->invValor . ' USD con una rentabilidad del ' . $data_inv[0]->invPorcentajeComision . ' %';

                $vl_com = ($data_inv[0]->invValor * $data_inv[0]->invPorcentajeComision) / 100;

                //dd($vl_com);
                DB::insert('INSERT INTO comision (comValor, usuario_idUsuario, usu_inv, comTipo, comDescripcion) 
                VALUES (?,?,?,?,?)', [$vl_com, $data[0]->usuPatrocinador, $idInvInsertado, 1, $des]);
            }

            DB::commit(); // Confirma la transacción


            return response()->json([
                'status' => 201,
                'message' => '
        Estamos encantados de confirmar que su 
        inversión ha sido registrada de manera exitosa en nuestro sistema. 
        Le agradecemos por su confianza y esperamos que este sea el comienzo de una asociación 
        financiera exitosa. Si tiene alguna pregunta o necesita asistencia adicional, 
        no dude en ponerse en contacto con nuestro equipo de soporte. 
        ¡Gracias por elegirnos como su socio en inversiones.'
            ], 201);
            //, 'fecha' => $fecha_final, 'fecha_ini' => $fecha_inicio], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al agregar el registro de inversión: ' . $e->getMessage()], 500);
        }
    }


    public function producto_usuario($id)
    {
        try {

            $data = DB::table('usuario_inversion as ui')
                ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
                ->leftJoin(DB::raw('
                (SELECT IFNULL(SUM(usu_pag_monto), 0) as total_pago, usuario_inversion FROM usuario_pago WHERE usu_pag_estado = "REALIZADO" GROUP BY usuario_inversion) as up'), 'up.usuario_inversion', '=', 'ui.id_usu_inv')
                ->select('ui.*', 'i.*', DB::raw('IFNULL(up.total_pago, 0) as total_pago'))
                ->where('ui.usuario_idUsuario', $id)
                ->paginate(10);



            // Eliminar la columna 'imagen' de cada elemento en el resultado
            foreach ($data as &$item) {
                unset($item->imagen);
            }

            return response()->json($data);
        } catch (\Exception $e) {
            // Obtener el mensaje de error
            $errorMessage = $e->getMessage();
            // Devolver una respuesta de error con el mensaje de error real
            return response()->json(['error' => $errorMessage], 500);
        }
    }

    //Solicitar Monto
    public function agregar_monto(Request $request)
    {
        DB::beginTransaction();

        try {

            $fecha = date('Y-m-d');
            $monto = $request->input('monto');
            $usu_inv = base64_decode($request->input('id'));

            // Buscar registros en la tabla usuario_inversion
            $pagoEstado = DB::table('usuario_pago')
                ->where('usuario_inversion', $usu_inv)
                ->where('usu_pag_estado', 'PENDIENTE')
                ->exists();

            if ($pagoEstado) {
                // Retornar mensaje indicando que ya existe un registro activo
                return response()->json([
                    'status' => 500,
                    'message' => 'En este momento no puedes realizar la petición, debido a que ya hay un adelanto pendiente en revision.'
                ], 201);
            }

            DB::table('usuario_pago')->insert([
                'usu_pag_fecha' => $fecha,
                'usu_pag_monto' => $monto,
                'usuario_inversion' => $usu_inv
            ]);

            DB::commit(); // Confirma la transacción

            return response()->json(['status' => 201, 'message' => 'Solicitud de adelanto se registro exitosamente'], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al registrar la solicitud de adelanto'], 500);
        }
    }

    public function adelanto_usuario($id)
    {
        try {

            $id = base64_decode($id);
            /*$data = DB::table('usuario_pago as up')
                ->where('up.usuario_inversion', $id)
                ->paginate(10);*/

            $data = DB::table('payment as pay')
                ->where('pay.investment_id', $id)
                ->paginate(10);


            return response()->json($data);
        } catch (\Exception $e) {

            // Devolver una respuesta de error
            return response()->json(['error' => 'Ocurrió un error al obtener los datos'], 500);
        }
    }
    public function producto_usuario_activo($id)
    {

        $fecha = date('y-m-d');


        $sql = "SELECT 
    ui.*, 
    i.*, 
    IFNULL(up.total_pago, 0) as total_pago,
    IFNULL(pm.total_pago_mensual, 0) as total_pago_mensual
FROM 
    usuario_inversion AS ui
INNER JOIN 
    inversion AS i ON i.idInversion = ui.inversion_idInversion
LEFT JOIN 
    (SELECT 
        IFNULL(SUM(usu_pag_monto), 0) as total_pago, 
        usuario_inversion 
     FROM 
        usuario_pago 
     WHERE 
        usu_pag_estado = 'REALIZADO' 
     GROUP BY 
        usuario_inversion
    ) as up ON up.usuario_inversion = ui.id_usu_inv
    LEFT JOIN 
        (SELECT 
            IFNULL(SUM(p.amount), 0) AS total_pago_mensual, 
            p.investment_id 
         FROM 
            payment AS p 
         WHERE 
            p.status = 'paid' 
         GROUP BY 
            p.investment_id
        ) as pm ON pm.investment_id = ui.id_usu_inv
WHERE 
    ui.usuario_idUsuario = '$id' AND
    ui. inv_fecha_final >= '$fecha'
    AND ui.usu_inv_estado = 'EN PROCESO';
";

        $data = DB::select($sql);

        if (count($data) > 0) {
            $usuario = $data[0];

            // Verifica si hay datos binarios de la imagen
            if (!is_null($usuario->imagen)) {
                $usuario->imagen = base64_encode($usuario->imagen);
            }

            return response()->json([
                'status' => 200,
                'message' => 'Datos obtenidos con éxito',
                'usuario' => $usuario,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Inversion no encontrado',
            ]);
        }
    }

    public function balance_general($id)
    {
       
        $sql = "
    SELECT 
            IFNULL(SUM(CASE 
                WHEN ui.usu_inv_estado = 'FINALIZADO' 
                THEN i.invValor + i.invGanancia 
                ELSE 0 
            END), 0) AS total_inversiones_finalizadas,

            IFNULL(SUM(CASE 
                WHEN ui.usu_inv_estado = 'EN PROCESO' 
                THEN (SELECT IFNULL(SUM(p.amount), 0) 
                      FROM payment AS p 
                      WHERE p.investment_id = ui.id_usu_inv AND p.status = 'paid') 
                ELSE 0 
            END), 0) AS total_inversiones_en_proceso

        FROM usuario_inversion AS ui
        INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
        WHERE ui.usuario_idUsuario =  '$id'";


        $data = DB::select($sql);

        //dd($data);

        if (!empty($data)) {
            $total = $data[0];
            return response()->json([
                'status' => 200,
                'message' => 'Datos obtenidos con éxito',
                'data' => $total,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Datos no encontrados',
            ]);
        }
    }
}
