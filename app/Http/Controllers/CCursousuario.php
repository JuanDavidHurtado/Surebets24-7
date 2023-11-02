<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CCursousuario extends Controller
{
    public function listar()
    {
        $sql = "SELECT * FROM curso AS c WHERE c.curEstado = 'ACTIVO'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function seleccion_curso($id)
    {
        $sql = "SELECT * FROM curso AS c
        WHERE c.idCurso = '$id'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        DB::beginTransaction();

        try {
            $fecha_pago = $request->input('fecha_pago');
            $hash = $request->input('hash');

            $idPagoInsertado = DB::table('pago')->insertGetId([
                'pagFecha' => $fecha_pago,
                'pagHash' => $hash
            ]);

            $fecha = date('Y-m-d');
            $usuario = $request->input('id_usu');
            $curso = $request->input('id_curso');

            DB::insert('INSERT INTO usuario_curso
        (
            cur_fecha,
            usuario_idUsuario,
            curso_idCurso,
            pago_idPago
        ) VALUES (?,?,?,?)', [$fecha, $usuario, $curso, $idPagoInsertado]);

            DB::commit(); // Confirma la transacción

            return response()->json(['message' => 'Curso agregado con éxito'], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['message' => 'Error al agregar el registro del curso: ' . $e->getMessage()], 500);
        }
    }
}
