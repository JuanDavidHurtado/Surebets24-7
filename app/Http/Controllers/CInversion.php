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

        try {
            $fecha_pago = $request->input('fecha_pago');
            $hash = $request->input('hash');

            $idPagoInsertado = DB::table('pago')->insertGetId([
                'pagFecha' => $fecha_pago,
                'pagHash' => $hash
            ]);

            $usuario = 2; //id inicio sesion
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


            $sql = "SELECT * FROM usuario AS u
            WHERE 
            u.usuPatrocinador IS NOT NULL AND
            u.idUsuario = '$usuario'";
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


            return response()->json(['status' => 201, 'message' => '
        Estamos encantados de confirmar que su 
        inversión ha sido registrada de manera exitosa en nuestro sistema. 
        Le agradecemos por su confianza y esperamos que este sea el comienzo de una asociación 
        financiera exitosa. Si tiene alguna pregunta o necesita asistencia adicional, 
        no dude en ponerse en contacto con nuestro equipo de soporte. 
        ¡Gracias por elegirnos como su socio en inversiones.'], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al agregar el registro de inversión: ' . $e->getMessage()], 500);
        }
    }
}