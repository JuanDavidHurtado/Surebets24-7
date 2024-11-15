<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;
use App\Services\NodoService;
use Illuminate\Support\Facades\Log;

class CAdministracion extends Controller
{

    protected $nodoService;

    public function __construct(NodoService $nodoService)
    {
        $this->nodoService = $nodoService;
    }



    public function listar_curso()
    {

        $data = DB::table('usuario_curso as uc')
            ->join('usuario as u', 'u.idUsuario', '=', 'uc.usuario_idUsuario')
            ->join('pago as p', 'p.idPago', '=', 'uc.pago_idPago')
            ->join('curso as c', 'c.idCurso', '=', 'uc.curso_idCurso')
            ->where('uc.usu_cur_estado', 'PENDIENTE')
            ->select('uc.*', 'u.*', 'p.*', 'c.*') // Especifica las columnas que necesitas
            ->paginate(10);

        return response()->json($data);
    }

    public function listar_inversion()
    {
        $data = DB::table('usuario_inversion as ui')
            ->join('usuario as u', 'u.idUsuario', '=', 'ui.usuario_idUsuario')
            ->join('pago as p', 'p.idPago', '=', 'ui.pago_idPago')
            ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
            ->where('ui.usu_inv_estado', 'PENDIENTE')
            ->select('ui.*', 'u.*', 'p.*', 'i.*') // Especifica las columnas que necesitas
            ->paginate(10);

        return response()->json($data);
    }


    public function listar_adelanto()
    {
        $data = DB::table('usuario_pago as up')
            ->join('usuario_inversion as ui', 'ui.id_usu_inv', '=', 'up.usuario_inversion')
            ->join('usuario as u', 'u.idUsuario', '=', 'ui.usuario_idUsuario')
            ->join('metodo_pago as mp', 'mp.usuario_idUsuario', '=', 'u.idUsuario')
            ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
            ->leftJoin(
                DB::raw('
            (SELECT IFNULL(SUM(usu_pag_monto), 0) as total_pago, usuario_inversion FROM usuario_pago 
            WHERE usu_pag_estado = "REALIZADO" GROUP BY usuario_inversion) as upago'),
                'upago.usuario_inversion',
                '=',
                'ui.id_usu_inv'
            )

            ->where('up.usu_pag_estado', 'PENDIENTE')
            ->select('up.*', 'ui.*', 'u.*', 'mp.*', 'i.*', DB::raw('IFNULL(upago.total_pago, 0) as total_pago')) // Especifica las columnas que necesitas

            ->paginate(10);


        /*$data1 = DB::table('usuario_inversion as ui')
            ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
            ->leftJoin(DB::raw('
            (SELECT IFNULL(SUM(usu_pag_monto), 0) as total_pago, usuario_inversion 
            FROM usuario_pago WHERE usu_pag_estado = "REALIZADO" GROUP BY usuario_inversion) as up'), 'up.usuario_inversion', '=', 'ui.id_usu_inv')
            ->select('ui.*', 'i.*', DB::raw('IFNULL(up.total_pago, 0) as total_pago'))
            ->where('ui.usuario_idUsuario', $id)
            ->paginate(10);*/

        return response()->json($data);
    }

    public function listar_inversion_actual()
    {
        try {
            
            $data = DB::table('usuario_inversion as ui')
                ->join('usuario as u', 'u.idUsuario', '=', 'ui.usuario_idUsuario')
                ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
                ->leftJoin('metodo_pago as mp', 'mp.usuario_idUsuario', '=', 'u.idUsuario')
                ->select('*')
                ->whereIn('ui.usu_inv_estado', ['EN PROCESO', 'FINALIZADO'])
                ->paginate(10);

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

    /*public function listar_inversion_actual()
    {
        $sql = "SELECT ui.*, u.*, i.*,mp.*, IFNULL(up.total_pago, 0) AS total_pago
        FROM usuario_inversion AS ui
        INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario
        INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = u.idUsuario
        LEFT JOIN (
            SELECT IFNULL(SUM(usu_pag_monto), 0) AS total_pago, usuario_inversion 
            FROM usuario_pago 
            WHERE usu_pag_estado = 'REALIZADO' 
            GROUP BY usuario_inversion
        ) AS up ON up.usuario_inversion = ui.id_usu_inv
        WHERE mp.metEstado = 'ACTIVO' 
        AND ui.usu_inv_estado = 'EN PROCESO'
        ORDER BY ui.inv_fecha_final ASC";

        $data = DB::select($sql);

        return response()->json($data);
    }*/

    public function listar_usuario()
    {
        $sql = "SELECT * FROM usuario AS u
        INNER JOIN estado AS e ON e.idEstado = u.estado_idEstado
        INNER JOIN rol AS r ON r.idRol = u.rol_idRol
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = u.idUsuario
        
        WHERE mp.metEstado='ACTIVO'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function listar_comision()
    {
        $sql = "SELECT 
    usu.usuDocumento AS 'paguese_doc',
    CONCAT_WS(' ', usu.usuNombre, usu.usuApellido) AS 'paguese_nom',
    mp.metBanco AS 'banco',
    mp.metTipo AS 'tipo',
    mp.metNumero AS 'numero',
    c.comValor AS 'valor_com',
    CONCAT_WS(' ', u.usuNombre, u.usuApellido) AS 'concepto_nom',
    CONCAT_WS(' ', p.invNombre, p.invValor) AS 'concepto_inv',
    c.comEstado AS 'estado',
    c.idComision AS 'id'
 FROM comision AS c
        INNER JOIN usuario AS usu ON usu.idUsuario = c.usuario_idUsuario
        INNER JOIN usuario_inversion AS i ON i.id_usu_inv = c.usu_inv
        INNER JOIN inversion AS p ON p.idInversion = i.inversion_idInversion
        INNER JOIN usuario AS u ON u.idUsuario = i.usuario_idUsuario
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = usu.idUsuario 

        WHERE 
        mp.metEstado = 'ACTIVO' AND
        (i.usu_inv_estado ='EN PROCESO' OR i.usu_inv_estado ='FINALIZADO')AND
        c.comEstado = 'PENDIENTE'
        AND c.comTipo = 1
        ";
        $data = DB::select($sql);

        //  dd($data);

        return response()->json($data);
    }

    public function listar_comision_curso()
    {
        $sql = "SELECT 
    usu.usuDocumento AS 'paguese_doc',
    CONCAT_WS(' ', usu.usuNombre, usu.usuApellido) AS 'paguese_nom',
    mp.metBanco AS 'banco',
    mp.metTipo AS 'tipo',
    mp.metNumero AS 'numero',
    c.comValor AS 'valor_com',
    CONCAT_WS(' ', u.usuNombre, u.usuApellido) AS 'concepto_nom',
    CONCAT_WS(' ', cur.curNombre, cur.curValor) AS 'concepto_cur',
    c.comEstado AS 'estado',
    c.idComision AS 'id'
 FROM comision AS c
        INNER JOIN usuario AS usu ON usu.idUsuario = c.usuario_idUsuario
        INNER JOIN usuario_curso AS uc ON uc.id_usu_cur = c.usu_cur
        INNER JOIN curso AS cur ON cur.idCurso = uc.curso_idCurso
        INNER JOIN usuario AS u ON u.idUsuario = uc.usuario_idUsuario
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = usu.idUsuario 

        WHERE 
        mp.metEstado = 'ACTIVO' AND
        (uc.usu_cur_estado ='EN PROCESO' OR uc.usu_cur_estado ='FINALIZADO')AND
        c.comEstado = 'PENDIENTE'
        AND c.comTipo = 2
        ";
        $data = DB::select($sql);

        //  dd($data);

        return response()->json($data);
    }


    public function estado_inversion(Request $request)
    {
        // Inicia una transacción
        DB::beginTransaction();

        try {
            $idInversion = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE usuario_inversion SET usu_inv_estado = ? WHERE id_usu_inv = ?', [$estado, $idInversion]);


            $sql_inv = "SELECT * from usuario AS u
                INNER JOIN usuario_inversion AS ui ON ui.usuario_idUsuario = u.idUsuario
                INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
                WHERE ui.id_usu_inv ='$idInversion'";

            $data_inv = DB::select($sql_inv);

            if ($estado == 'EN PROCESO') {
                Log::info('Dentro de insertar usu inversion');

                /* insertar datos en nodo usuInversion */
                if ($idInversion) {
                    Log::info('Error al insertar nodo: ' . $idInversion);
                    insertar_nodo_usuInversion($idInversion);
                }
            }

            if ($estado == 'ANULADO') {
                $cuerpo = View::make('emails.inversion_anulado', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias])->render();

                DB::update('UPDATE comision SET comEstado = ? WHERE usu_inv = ?', [$estado, $idInversion]);
            } else {

                $cuerpo = View::make('emails.inversion_finalizado', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias])->render();
                $patrocinador = $data_inv[0]->usuPatrocinador;
                //Log::info("VARIABLE PATROCINADOR", ['patrocinador' => $patrocinador]);

                if ($patrocinador != NULL) {

                    // Consulta SQL con parámetros vinculados
                    $sql_lista = "SELECT * FROM usuario AS u 
                                  INNER JOIN rol AS r ON r.idRol = u.rol_idRol
                                  WHERE u.idUsuario = ?";

                    // Ejecutar la consulta con los parámetros vinculados
                    $data_patro = DB::select($sql_lista, [$patrocinador]);


                    $total = $data_patro[0]->usuPunto + $data_inv[0]->invPunto;

                    $update_punto = "UPDATE usuario SET usuPunto = '$total' WHERE idUsuario = '$patrocinador'";
                    // Ejecuta la consulta de actualización
                    DB::update($update_punto);

                    $des_punto = $data_inv[0]->invPunto . ' Punto(s) obtenidos por medio del usuario ' . $data_inv[0]->usuLogin . ', por la inversion de ' . $data_inv[0]->invValor . ' USD';


                    DB::insert('INSERT INTO historial_punto (his_pun_fecha, his_pun_descripcion, his_pun_puntos, usuario_idUsuario) 
                    VALUES (?,?,?,?)', [date('Y-m-d'), $des_punto, $data_inv[0]->invPunto, $patrocinador]);


                    $updateUsuario = false;

                    if ($total >= 25000 && $total < 1000000 && $data_patro[0]->idRol === 2) {
                        $updateUsuario = true;
                        $id_rol = 3;
                    } else if ($total >= 1000000 && $total < 200000 && $data_patro[0]->idRol === 3) {
                        $updateUsuario = true;
                        $id_rol = 4;

                        //5
                    } else if ($total >= 200000 && $total < 500000 && $data_patro[0]->idRol === 4) {
                        $updateUsuario = true;
                        $id_rol = 5;

                        //7
                    } else if ($total >= 500000 && $total < 1000000 && $data_patro[0]->idRol === 5) {
                        $updateUsuario = true;
                        $id_rol = 6;

                        //10
                    } else if ($total >= 1000000 && $total < 3000000 && $data_patro[0]->idRol === 6) {
                        $updateUsuario = true;
                        $id_rol = 7;
                    } else if ($total >= 3000000 && $total < 5000000 && $data_patro[0]->idRol === 7) {
                        $updateUsuario = true;
                        $id_rol = 8;
                    } else if ($total >= 5000000 && $data_patro[0]->idRol === 8) {
                        $updateUsuario = true;
                        $id_rol = 9;

                        //15
                    } else {
                        $updateUsuario = false;
                    }

                    // Actualiza la tabla usuario y el campo rol_idRol a 3
                    if ($updateUsuario === true) {

                        $nivel = $data_patro[0]->idRol + 1;

                        $update_query = "UPDATE usuario SET rol_idRol = '$id_rol' WHERE idUsuario = '$patrocinador'";
                        // Ejecuta la consulta de actualización
                        DB::update($update_query);

                        $body_rol = View::make('emails.nuevo_rol', ['nuevo_nivel' => $nivel])->render();

                        $destinatario = $data_patro[0]->usuCorreo;
                        $asunto = 'Nuevo Nivel';
                        CorreoUtil::enviarCorreo($destinatario, $asunto, $body_rol);
                    }
                }
            }


            $destinatario = $data_inv[0]->usuCorreo;
            $asunto = 'Informacion Inversion';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            // Confirma la transacción si todas las consultas se ejecutan correctamente
            DB::commit();

            return response()->json(['status' => 200, 'message' => 'Estado de la inversión actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, deshace la transacción
            DB::rollBack();
            // Log the error
            // Log::error('Error al actualizar la inversión: ' . $e->getMessage());


            // Maneja la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar la inversión: ' . $e->getMessage()], 500);
        }
    }

    public function estado_curso(Request $request)
    {
        try {
            $idCurso = $request->input('id');
            $estado = $request->input('estado');

            $sql = "SELECT * FROM usuario_curso AS uc
            INNER JOIN usuario AS u ON u.idUsuario = uc.usuario_idUsuario
            INNER JOIN curso AS c ON c.idCurso = uc.curso_idCurso
            WHERE 
            uc.id_usu_cur = '$idCurso'";
            $data = DB::select($sql);


            if ($estado == 'FINALIZADO') {

                $cuerpo = View::make('emails.curso_finalizado', ['nom_curso' => $data[0]->curNombre])->render();
            } else {

                // Renderiza la vista a una cadena de texto
                $cuerpo = View::make('emails.curso_anulado', ['nom_curso' => $data[0]->curNombre])->render();
            }

            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Informacion curso';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            DB::update('UPDATE usuario_curso SET usu_cur_estado = ? WHERE id_usu_cur = ?', [$estado, $idCurso]);


            return response()->json(['status' => 200, 'message' => 'Estado del curso actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el curso: ' . $e->getMessage()], 500);
        }
    }


    public function estado_usuario(Request $request)
    {
        try {
            $idUsuario = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE usuario SET estado_idEstado = ? WHERE idUsuario = ?', [$estado, $idUsuario]);

            return response()->json(['status' => 200, 'message' => 'Estado del usuario actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function estado_comision(Request $request)
    {
        try {
            $idComision = $request->input('id');
            $estado = $request->input('estado');


            $sql = "SELECT * FROM comision AS c
            INNER JOIN usuario AS u ON u.idUsuario = c.usuario_idUsuario
            WHERE 
            c.idComision = '$idComision'";
            $data = DB::select($sql);



            $cuerpo = View::make('emails.comision', ['val_com' => $data[0]->comValor])->render();
            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Informacion Comision';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);


            DB::update('UPDATE comision SET comEstado = ? WHERE idComision = ?', [$estado, $idComision]);


            return response()->json(['status' => 200, 'message' => 'Estado de la comision actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el estado de la comision: ' . $e->getMessage()], 500);
        }
    }


    public function estado_adelanto(Request $request)
    {
        try {
            $idAdelanto = $request->input('id');
            $estado = $request->input('estado');

            //dd($estado);

            $sql = "SELECT * FROM usuario_pago AS up
            INNER JOIN usuario_inversion AS ui ON ui.id_usu_inv = up.usuario_inversion
            INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario

            WHERE 
            up.id_usu_pag = '$idAdelanto'";
            $data = DB::select($sql);


            $cuerpo = View::make('emails.adelanto', ['val_ade' => $data[0]->usu_pag_monto, 'estado' => $estado])->render();
            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Informacion Adelanto Inversion';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);


            DB::update('UPDATE usuario_pago SET usu_pag_estado = ? WHERE id_usu_pag  = ?', [$estado, $idAdelanto]);


            return response()->json(['status' => 200, 'message' => 'Estado del adelanto actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el estado del adelanto: ' . $e->getMessage()], 500);
        }
    }

    public function listar_comision_especial()
    {
        $sql = "SELECT 
         u.usuDocumento AS 'paguese_doc',
    CONCAT_WS(' ', u.usuNombre, u.usuApellido) AS 'paguese_nom',
    mp.metBanco AS 'banco',
    mp.metTipo AS 'tipo',
    mp.metNumero AS 'numero',
    c.comValor AS 'valor_com',
    c.comEstado AS 'estado',
    c.idComision AS 'id'
        
         FROM comision AS c
        INNER JOIN usuario AS u ON u.idUsuario = c.usuario_idUsuario
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = u.idUsuario 

        WHERE 
        mp.metEstado = 'ACTIVO' AND
        c.comEstado = 'PENDIENTE'
        AND c.comTipo = 3";
        $data = DB::select($sql);

        // dd($data);

        return response()->json($data);
    }

    public function insertar_nodo_usuInversion($usuInvId)
    {
        // Si no se proporcionan los valores de posición y nivel, establecer valores predeterminados para la raíz

        $posicion = null;
        $nivel = 0;
        $userPadre = null;

        $tipoNodo = $this->nodoService->determinarTipoNodoNuevoUsuario($posicion, $nivel);

        // Inserción del nodo en la tabla nodo_arbol
        $this->nodoService->insertarNodo($usuInvId, $userPadre, $posicion, $tipoNodo, $nivel);
    }
}
