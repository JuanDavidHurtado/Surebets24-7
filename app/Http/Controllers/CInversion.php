<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CInversion extends Controller
{
    public function listar()
    {
        $sql = "SELECT * FROM inversion AS i WHERE i.invEstado = 'ACTIVO'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function seleccion_plan($id)
    {
        $sql = "SELECT * FROM inversion AS i
        WHERE i.idInversion = '$id'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        DB::beginTransaction();

        /*$id = 2;

        $sql = "SELECT * FROM usuario AS u
        WHERE u.idUsuario = '$id'";
        $data = DB::select($sql);

        dd($data[0]->usuPatrocinador);*/

        try {
            $fecha_pago = $request->input('fecha_pago');
            $hash = $request->input('hash');

            $idPagoInsertado = DB::table('pago')->insertGetId([
                'pagFecha' => $fecha_pago,
                'pagHash' => $hash
            ]);

            $usuario = $request->input('id_usu');
            $producto = $request->input('id_pro');
            $fecha_inicio = date('Y-m-d');
            $dias = $request->input('dias');
            $fecha_fin = date('Y-m-d', strtotime('+' . $dias . ' days'));

            $idInvInsertado = DB::table('usuario_inversion')->insertGetId([
                'inv_fecha_inicio' => $fecha_inicio,
                'inv_fecha_final' => $fecha_fin,
                'inv_dias' => $dias,
                'usuario_idUsuario' => $usuario,
                'inversion_idInversion' => $producto,
                'pago_idPago' => $idPagoInsertado
            ]);

            $id = 2;

            $sql = "SELECT * FROM usuario AS u
            WHERE u.idUsuario = '$id'";
            $data = DB::select($sql);

            if (sizeof($data) > 0) {
                $sql_inv = "SELECT * FROM inversion AS inv
                WHERE inv.idInversion = '$producto'";
                $data_inv = DB::select($sql_inv);

                $vl_com = ($data_inv[0]->invValor * $data_inv[0]->invPorcentaje) / 100;

                //dd($vl_com);

                DB::insert('INSERT INTO comision (comValor, usuario_idUsuario, usu_inv) 
                VALUES (?,?,?)', [$vl_com, $data[0]->usuPatrocinador, $idInvInsertado]);
            }


            DB::commit(); // Confirma la transacción

            return response()->json(['message' => 'Inversión agregada con éxito'], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['message' => 'Error al agregar el registro de inversión: ' . $e->getMessage()], 500);
        }
    }
}
