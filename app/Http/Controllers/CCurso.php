<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CCurso extends Controller
{



    public function listar()
    {
        $sql = "SELECT * FROM curso ";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        try {
            $nombre = $request->input('nombre');
            $valor = $request->input('valor');

            DB::insert('INSERT INTO curso (curNombre, curValor) VALUES (?, ?)', [$nombre, $valor]);
    
            return response()->json(['message' => 'Curso agregado con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al agregar el curso: ' . $e->getMessage()], 500);
        }
    }

    public function estado(Request $request)
    {
        try {
            $idCurso = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE curso SET curEstado = ? WHERE idCurso = ?', [$estado, $idCurso]);

            return response()->json(['message' => 'Estado del curso actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['message' => 'Error al actualizar el estado del curso: ' . $e->getMessage()], 500);
        }
    }
}
