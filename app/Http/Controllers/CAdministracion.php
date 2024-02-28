<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;




class CAdministracion extends Controller
{
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

    public function listar_inversion_actual()
    {

        $sql = "SELECT * FROM usuario_inversion AS ui
        INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario
        INNER JOIN inversion AS i ON idInversion = ui.inversion_idInversion 
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = u.idUsuario 
        WHERE mp.metEstado='ACTIVO' AND
        ui.usu_inv_estado ='EN PROCESO'
        
        ORDER BY ui.inv_fecha_final ASC";
        $data = DB::select($sql);

        return response()->json($data);
    }

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

    public function estado_inversion(Request $request)
    {
        // Inicia una transacción
        DB::beginTransaction();

        try {
            $idInversion = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE usuario_inversion SET usu_inv_estado = ? WHERE id_usu_inv = ?', [$estado, $idInversion]);


            $sql_inv =  "SELECT * from usuario AS u
                INNER JOIN usuario_inversion AS ui ON ui.usuario_idUsuario = u.idUsuario
                INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
                WHERE ui.id_usu_inv ='$idInversion'";

            $data_inv = DB::select($sql_inv);


            if ($estado == 'ANULADO') {
                $cuerpo = View::make('emails.inversion_anulado', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias])->render();

                DB::update('UPDATE comision SET comEstado = ? WHERE usu_inv = ?', [$estado, $idInversion]);
            } else {

                $cuerpo = View::make('emails.inversion_finalizado', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias])->render();
                $patrocinador = $data_inv[0]->usuPatrocinador;
                //Log::info("VARIABLE PATROCINADOR", ['patrocinador' => $patrocinador]);

                if ($patrocinador != NULL) {


                    $sql_lista =  "SELECT 
                (SELECT COUNT(DISTINCT ui.usuario_idUsuario) 
                 FROM usuario AS u
                 INNER JOIN usuario_inversion AS ui ON ui.usuario_idUsuario = u.idUsuario
                 WHERE u.usuPatrocinador = '$patrocinador'
                 AND ui.usu_inv_estado IN ('EN PROCESO', 'FINALIZADO')) AS total_registros,
                r.idRol AS id_rol,
                p.usuCorreo AS correo
            FROM usuario AS p
            INNER JOIN rol AS r ON r.idRol = p.rol_idRol
            WHERE p.idUsuario = '$patrocinador'";
                    $data_patro = DB::select($sql_lista);

                    //Log::info("VARIABLE PATROCINADOR", ['patrocinador' => $data_patro[0]->total_registros]);

                    // Log::info("VARIABLE DATA PATRO",$data_patro);


                    $updateUsuario = false;

                    if ($data_patro[0]->total_registros >= 50 && $data_patro[0]->total_registros < 150 && $data_patro[0]->id_rol === 2) {
                        $updateUsuario = true;
                        $id_rol = 3;
                        $porcentaje = 3;
                    } else if ($data_patro[0]->total_registros >= 150 && $data_patro[0]->total_registros < 300 && $data_patro[0]->id_rol === 3) {
                        $updateUsuario = true;
                        $id_rol = 4;
                        $porcentaje = 5;

                        //5
                    } else if ($data_patro[0]->total_registros >= 300 && $data_patro[0]->total_registros < 500 && $data_patro[0]->id_rol === 4) {
                        $updateUsuario = true;
                        $id_rol = 5;
                        $porcentaje = 7;

                        //7
                    } else if ($data_patro[0]->total_registros >= 500 && $data_patro[0]->total_registros < 1000 && $data_patro[0]->id_rol === 5) {
                        $updateUsuario = true;
                        $id_rol = 6;
                        $porcentaje = 10;

                        //10
                    } else if ($data_patro[0]->total_registros > 1000 && $data_patro[0]->id_rol === 6) {
                        $updateUsuario = true;
                        $id_rol = 7;
                        $porcentaje = 15;


                        //15
                    } else {
                        $updateUsuario = false;
                    }


                    // Actualiza la tabla usuario y el campo rol_idRol a 3
                    if ($updateUsuario === true) {

                        $sql_total =  "SELECT SUM(p.invValor) AS total_inversion
                                    FROM usuario AS u
                                    INNER JOIN usuario_inversion AS ui ON ui.usuario_idUsuario = u.idUsuario
                                    INNER JOIN inversion AS p ON p.idInversion = ui.inversion_idInversion
                                    WHERE u.usuPatrocinador = '$patrocinador'
                                    AND ui.usu_inv_estado IN ('EN PROCESO', 'FINALIZADO')";

                        $data_total = DB::select($sql_total);

                        $vl_com = ($data_total[0]->total_inversion * $porcentaje) / 100;
                        $nivel = $data_patro[0]->id_rol + 1;
                        $msg = '¡Felicidades! Has superado tus propios límites y alcanzado un nuevo nivel. ¡Sigue brillando y conquistando nuevos logros!, Bienvenido al nivel ' . $nivel;;

                        //Registro Comision
                        DB::insert('INSERT INTO comision (comValor, usuario_idUsuario, comTipo, comDescripcion) 
                    VALUES (?,?,?,?)', [$vl_com, $patrocinador, 2, $msg]);

                        $update_query = "UPDATE usuario SET rol_idRol = '$id_rol' WHERE idUsuario = '$patrocinador'";
                        // Ejecuta la consulta de actualización
                        DB::update($update_query);

                        $body_rol = View::make('emails.nuevo_rol', ['vl_com' => $vl_com, 'nuevo_nivel' => $nivel])->render();

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
        AND c.comTipo = 2";
        $data = DB::select($sql);

        // dd($data);

        return response()->json($data);
    }
}
