<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Hash;


class CReferido extends Controller
{
    public function listar()
    {
        $id = 1;
        $sql = "
    SELECT *
    FROM usuario AS u
    INNER JOIN estado AS est ON est.idEstado = u.estado_idEstado
    WHERE u.usuPatrocinador = $id
";
        $data = DB::select($sql);


        return response()->json($data);
    }

   
}
