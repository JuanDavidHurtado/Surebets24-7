<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CAdministracion extends Controller
{
    public function listar_curso()
    {
        $sql = "SELECT * FROM usuario_curso AS uc
        INNER JOIN usuario AS u ON u.idUsuario = uc.usuario_idUsuario
        INNER JOIN pago AS p ON p.idPago = uc.pago_idPago
        INNER JOIN curso AS c ON idCurso = uc.curso_idCurso 
        WHERE uc.curEstado ='PENDIENTE'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function listar_inversion()
    {
        $sql = "SELECT * FROM usuario_inversion AS ui
        INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario
        INNER JOIN pago AS p ON p.idPago = ui.pago_idPago
        INNER JOIN inversion AS i ON idInversion = ui.inversion_idInversion 
        WHERE ui.usu_inv_estado ='PENDIENTE'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function listar_usuario()
    {
        $sql = "SELECT * FROM usuario AS u
        INNER JOIN estado AS e ON e.idEstado = u.estado_idEstado";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function listar_comision()
    {
        $sql = "SELECT * FROM comision AS c
        INNER JOIN usuario AS usu ON usu.idUsuario = c.usuario_idUsuario
        INNER JOIN usuario_inversion AS i ON i.id_usu_inv = c.usu_inv
        INNER JOIN inversion AS p ON p.idInversion = i.inversion_idInversion
        INNER JOIN usuario AS u ON u.idUsuario = i.usuario_idUsuario
        WHERE 
        i.usu_inv_estado ='EN PROCESO' AND
        c.comEstado = 'PENDIENTE'";
        $data = DB::select($sql);

        return response()->json($data);
    }


    public function estado_inversion(Request $request)
    {
        // Inicia una transacción
        DB::beginTransaction();

        try {
            $idInversion = $request->input('id');
            $estado = $request->input('estado');

            if ($estado == 'ANULADO') {
                DB::update('UPDATE comision SET comEstado = ? WHERE usu_inv = ?', [$estado, $idInversion]);
            }

            DB::update('UPDATE usuario_inversion SET usu_inv_estado = ? WHERE id_usu_inv = ?', [$estado, $idInversion]);

            // Confirma la transacción si todas las consultas se ejecutan correctamente
            DB::commit();

            return response()->json(['message' => 'Estado de la inversión actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, deshace la transacción
            DB::rollBack();

            // Maneja la excepción aquí
            return response()->json(['message' => 'Error al actualizar la inversión: ' . $e->getMessage()], 500);
        }
    }


    public function estado_curso(Request $request)
    {
        try {
            $idCurso = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE usuario_curso SET curEstado = ? WHERE id_usu_cur = ?', [$estado, $idCurso]);

            return response()->json(['message' => 'Estado del curso actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['message' => 'Error al actualizar el curso: ' . $e->getMessage()], 500);
        }
    }

    public function estado_usuario(Request $request)
    {
        try {
            $idUsuario = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE usuario SET estado_idEstado = ? WHERE idUsuario = ?', [$estado, $idUsuario]);

            return response()->json(['message' => 'Estado del usuario actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['message' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function estado_comision(Request $request)
    {
        try {
            $idComision = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE comision SET comEstado = ? WHERE idComision = ?', [$estado, $idComision]);

            return response()->json(['message' => 'Estado de la comision actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['message' => 'Error al actualizar el estado de la comision: ' . $e->getMessage()], 500);
        }
    }
}
