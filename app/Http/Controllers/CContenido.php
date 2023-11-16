<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CContenido extends Controller
{

    public function listar($id)
    {
        $sql = "SELECT * FROM curso AS c
                INNER JOIN contenido AS cont ON cont.curso_idCurso = c.idCurso
                WHERE c.idCurso = :idCurso";
        $data = DB::select($sql, ['idCurso' => $id]);
    
        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        try {
            $nombre = $request->input('nombre');
            $id_curso = $request->input('id_curso');

            DB::insert('INSERT INTO contenido (conNombre, curso_idCurso) VALUES (?,?)', [$nombre, $id_curso]);

            return response()->json(['message' => 'Contenido agregado con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al agregar contenido a este curso: ' . $e->getMessage()], 500);
        }
    }
}
