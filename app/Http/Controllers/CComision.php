<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CComision extends Controller
{
    public function listar($id)
    {
        $sql = "SELECT * FROM comision AS c
        INNER JOIN usuario_inversion AS i ON i.id_usu_inv = c.usu_inv
        INNER JOIN inversion AS p ON p.idInversion = i.inversion_idInversion
        INNER JOIN usuario AS u ON u.idUsuario = i.usuario_idUsuario
        WHERE 
        c.usuario_idUsuario = '$id' AND
        (c.comEstado = 'PENDIENTE' OR c.comEstado = 'FINALIZADO')
        AND c.comTipo = 1";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function listar_comision_especial($id)
    {
        $sql = "SELECT * FROM comision AS c
        WHERE 
        c.usuario_idUsuario = '$id' AND
        (c.comEstado = 'PENDIENTE' OR c.comEstado = 'FINALIZADO')
        AND c.comTipo = 2";
        $data = DB::select($sql);

        return response()->json($data);
    }
}
