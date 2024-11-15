<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;



class CBotsusuario extends Controller
{
    public function listar()
    {
        $sql = "SELECT * FROM bots AS b WHERE b.botEstado = 'ACTIVO'";
        $data = DB::select($sql);

        return response()->json($data);
    }


    public function agregar(Request $request)
    {
        DB::beginTransaction();

        try {
            $metodo = $request->input('metodo_pago');
            $fecha_pago = $request->input('fecha_pago');
            $hash = $request->input('hash');
            $pago_metodo = 'criptomonedas';

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

            $fecha = date('Y-m-d');
            $usuario = $request->input('id'); //id inicio sesion
            $bot = base64_decode($request->input('id_bots'));


            $sql_inv = "SELECT * FROM bots AS b
            WHERE b.idBot = '$bot'";
            $data_bot = DB::select($sql_inv);

            $idBotInsertado = DB::table('usuario_bots')->insertGetId([
                'bot_fecha' => $fecha,
                'usuario_idUsuario' => $usuario,
                'bot_idBot' => $bot,
                'pago_idPago' => $idPagoInsertado
            ]);


            $sql = "SELECT * FROM usuario AS u WHERE u.idUsuario = '$usuario'";
            $data = DB::select($sql);

            if (sizeof($data) > 0 && $data[0]->usuPatrocinador != NULL) {

                $des = 'Rentabilizacion obtenida por medio de el usuario '
                    . $data[0]->usuLogin . ' ,por la compra del bot '
                    . $data_bot[0]->botNombre . ' por el valor de '
                    . $data_bot[0]->botValor . ' USD con una rentabilidad del '
                    . $data_bot[0]->botPorcentaje . ' %';

                $vl_com = ($data_bot[0]->botValor * $data_bot[0]->botPorcentaje) / 100;

                //dd($vl_com);
                DB::insert('INSERT INTO comision (comValor, usuario_idUsuario, usu_bot, comTipo, comDescripcion) 
                VALUES (?,?,?,?,?)', [$vl_com, $data[0]->usuPatrocinador, $idBotInsertado, 4, $des]);
            }


            // Renderiza la vista a una cadena de texto
            $cuerpo = View::make('emails.bots')->render();
            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Bots Surebets';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            DB::commit(); // Confirma la transacción

            return response()->json([
                'status' => 201,
                'message' => '¡Registro exitoso! Tu solicitud ha sido recibido y ahora está en proceso de revisión. Pronto recibirás una notificación con respecto al resultado de tu solicitud.'
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al agregar el registro del bots: ' . $e->getMessage()], 500);
        }
    }


    public function seleccion_bots_compra($id)
    {
        try {
            // Iniciar la transacción
            DB::beginTransaction();

            $id = base64_decode($id);
            // Consulta principal para obtener la información del curso
            $sql = "SELECT * FROM bots AS b
        WHERE 
        b.idBot = '$id'";
            $resultados = DB::select($sql);

            // Confirmar la transacción
            DB::commit();

            // Devolver la respuesta JSON con los resultados
            return response()->json(['data' => $resultados, 'status' => 200]);
        } catch (\Exception $e) {

            // En caso de error, revertir la transacción
            DB::rollBack();
            // Maneja el error de manera adecuada
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function bot_usuario($id)
    {

        try {
            $data = DB::table('usuario_bots as ub')
                ->join('bots as b', 'b.idBot', '=', 'ub.bot_idBot')
                ->where('ub.usuario_idUsuario', $id)
                ->paginate(10);

            return response()->json($data);
        } catch (\Exception $e) {
            // Registrar el error
            //\Log::error('Error en curso_usuario: ' . $e->getMessage());

            // Devolver una respuesta de error
            return response()->json(['error' => 'Ocurrió un error al obtener los datos de los bot'], 500);
        }
    }
}
