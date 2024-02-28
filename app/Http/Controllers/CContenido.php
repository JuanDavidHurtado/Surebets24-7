<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CContenido extends Controller
{

    public function listar($id)
    {
        
        $data = DB::table('curso as c')
        ->join('contenido as cont', 'cont.curso_idCurso', '=', 'c.idCurso')
        ->where('c.idCurso', $id)
        ->select('c.*', 'cont.*') // Selecciona los campos que necesites
        ->paginate(10);
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
