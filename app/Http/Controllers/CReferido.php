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
      
       
        try {
            $usuarios = DB::table('usuario as u')
                            ->join('estado as est', 'est.idEstado', '=', 'u.estado_idEstado')
                            ->join('rol as r', 'r.idRol', '=', 'u.rol_idRol')
                            ->where('u.usuPatrocinador', $id)
                            ->select('*') // Especifica las columnas que necesitas
                            ->paginate(10);
        
            return response()->json($usuarios);
        } catch (\Exception $e) {
            // Manejar la excepción
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
    }

   
}
