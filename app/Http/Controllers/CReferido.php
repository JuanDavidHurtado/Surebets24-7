<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Hash;


class CReferido extends Controller
{
    public function listar($id)
    {
      
        $sql = "
    SELECT *
    FROM usuario AS u
    INNER JOIN estado AS est ON est.idEstado = u.estado_idEstado
    INNER JOIN rol AS r ON r.idRol = u.rol_idRol
    WHERE u.usuPatrocinador = $id
";
        $data = DB::select($sql);


        return response()->json($data);
    }

   
}
