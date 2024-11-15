<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class CReferido extends Controller
{
    

    public function listar($id)
{
    try {
        
        $usuarios = DB::table('usuario as u')
    ->join('estado as est', 'est.idEstado', '=', 'u.estado_idEstado')
    ->join('rol as r', 'r.idRol', '=', 'u.rol_idRol')
    ->select(
        'u.*',
        'est.*',
        'r.*',
        DB::raw("(
            SELECT estado_posicion
            FROM posicion_nodo_usuinv as u2
            WHERE u2.usr_referido_id = u.idUsuario
            AND u2.fecha = (
                SELECT MAX(fecha)
                FROM posicion_nodo_usuinv
                WHERE usr_referido_id = u.idUsuario
            )
            ORDER BY fecha DESC
            LIMIT 1
        ) as estado")
    )
    ->where('u.usuPatrocinador', $id)
    ->paginate(10);


        return response()->json($usuarios);
    } catch (\Exception $e) {
        // Manejar la excepción
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

   

   
}
