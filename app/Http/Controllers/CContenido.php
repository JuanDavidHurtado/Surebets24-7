<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CContenido extends Controller
{

    public function listar($id)
    {

        $id_deco = base64_decode($id);
        


        $data = DB::table('curso as c')
            ->join('contenido as cont', 'cont.curso_idCurso', '=', 'c.idCurso')
            ->where('c.idCurso', $id_deco)
            ->select('c.*', 'cont.*') // Selecciona los campos que necesites
            ->paginate(10);

            //dd($data);
           
        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        try {
            $nombre = $request->input('nombre');
            $id_curso = base64_decode($request->input('id_curso'));
            //$request->input('id_curso');

            DB::insert('INSERT INTO contenido (conNombre, curso_idCurso) VALUES (?,?)', [$nombre, $id_curso]);

            return response()->json(['message' => 'Contenido agregado con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al agregar contenido a este curso: ' . $e->getMessage()], 500);
        }
    }
}
