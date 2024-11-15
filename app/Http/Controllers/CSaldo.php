<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;

class CSaldo extends Controller
{

    public function agregar(Request $request)
    {
        DB::beginTransaction();

        try {

            $fecha = date('Y-m-d');
            $usuario = $request->input('id'); //id inicio sesion
            $codigo = $request->input('codigo');
            $monto = intval($request->input('monto'));
            $obs = $request->input('observacion');

            // Consulta el usuario con el ID proporcionado          
            $usu_emi = DB::table('usuario')->where('idUsuario', $usuario)->first();

            if ($usu_emi->usuGiro === 'NO') {
                return response()->json([
                    'status' => 201,
                    'message' => 'Acceso denegado: el usuario no esta habilitado para realizar el giro de saldo.'
                ], 201);
            }


            // Consulta el usuario con el ID proporcionado          
            $usu_rec = DB::table('usuario')->where('usuCodigo', $codigo)->where('idUsuario', '!=', $usuario)->first();

            if (!$usu_rec) {
                return response()->json([
                    'status' => 201,
                    'message' => 'El código ingresado no está asociado a ningún usuario.'
                ], 201);
            }

            $saldo_emi = intval($usu_emi->usuSaldo);


            if ($saldo_emi <= 0) {

                // Retornar mensaje indicando que ya existe un registro activo
                return response()->json([
                    'status' => 201,
                    'message' => 'En este momento no puedes realizar el giro, tu saldo es insuficiente.'
                ], 201);
            }

            if ($saldo_emi < $monto) {

                // Retornar mensaje indicando que ya existe un registro activo
                return response()->json([
                    'status' => 201,
                    'message' => 'En este momento no puedes realizar el giro, tu saldo es inferior al saldo a enviar.'
                ], 201);
            }


            $total_rec = intval($usu_rec->usuSaldo) + $monto;
            $total_emi = intval($usu_emi->usuSaldo) - $monto;
            $id_rec = $usu_rec->idUsuario;

            $obs_aut1 = 'Transferencia Realizada';
            $obs_aut2 = 'Transferencia Recibida';

            DB::table('usuario')
                ->where('idUsuario', $usuario)
                ->update([
                    'usuSaldo' => $total_emi,
                ]);

            DB::table('usuario')
                ->where('idUsuario', $id_rec)
                ->update([
                    'usuSaldo' => $total_rec,
                ]);


            DB::insert(
                'INSERT INTO historial_saldo (his_sal_fecha, usu_emi, usu_rec, his_sal_monto, his_sal_observacion, his_sal_descripcionEmi) VALUES (?,?,?,?,?,?)',
                [$fecha, $usuario, $id_rec, $monto, $obs_aut1, $obs]
            );

            DB::insert(
                'INSERT INTO historial_saldo (his_sal_fecha, usu_emi, usu_rec, his_sal_monto, his_sal_observacion, his_sal_descripcionEmi) VALUES (?,?,?,?,?,?)',
                [$fecha, $id_rec, $usuario, $monto, $obs_aut2, $obs]
            );

            // Define los datos del correo
            $correos = [
                [
                    'destinatario' => $usu_emi->usuCorreo,
                    'tipo' => 'emisor',
                    'login_rec' => $usu_rec->usuLogin,
                    'monto' => $monto,
                ],
                [
                    'destinatario' => $usu_rec->usuCorreo,
                    'tipo' => 'receptor',
                    'login_emi' => $usu_emi->usuLogin,
                    'monto' => $monto,
                ]
            ];

            // Define el asunto del correo
            $asunto = 'Información Giro Fichas';

            // Envía los correos
            foreach ($correos as $correo) {
                $cuerpo = View::make('emails.giro_notificacion', $correo)->render();
                CorreoUtil::enviarCorreo($correo['destinatario'], $asunto, $cuerpo);
            }

            DB::commit(); // Confirma la transacción

            return response()->json([
                'status' => 200,
                'message' => '¡Registro exitoso! El movimieto de saldo se realizo correctamente.'
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al realizar el giro: ' . $e->getMessage()], 500);
        }
    }


    public function historial($id)
    {
        try {
            $data = DB::table('historial_saldo as hs')
                ->join('usuario as u', 'u.idUsuario', '=', 'hs.usu_rec')
                ->where('hs.usu_emi', $id)
                ->select('*')
                ->paginate(10);

            return response()->json($data);
        } catch (\Exception $e) {
            // Manejar la excepción
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function historial_adm()
    {
        try {
            $data = DB::table('historial_saldo as hs')
                ->join('usuario as u_e', 'u_e.idUsuario', '=', 'hs.usu_emi')
                ->join('usuario as u_r', 'u_r.idUsuario', '=', 'hs.usu_rec')
                ->where('hs.his_sal_observacion', 'Transferencia Realizada')
                ->select(
                    'hs.his_sal_monto as cantidad_fichas',   
                    'hs.his_sal_fecha as fecha_transferencia', 
                    'u_e.usuLogin as emisor_login',   
                    'u_r.usuLogin as receptor_login',
                    'hs.his_sal_descripcionEmi as descripcion',
                )
                ->paginate(10);
            return response()->json($data);
        } catch (\Exception $e) {
            // Manejar la excepción
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
