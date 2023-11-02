<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CProducto extends Controller
{

    public function listar()
    {
        $sql = "SELECT * FROM inversion";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        try {
            $nombre = $request->input('nombre');
            $valor = $request->input('valor');
            $porcentaje = $request->input('porcentaje');

            DB::insert('INSERT INTO inversion (invNombre, invValor, invPorcentaje) VALUES (?,?,?)',
             [$nombre, $valor, $porcentaje]);

            return response()->json(['message' => 'Producto agregado con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al agregar el producto: ' . $e->getMessage()], 500);
        }
    }

    public function estado(Request $request)
    {
        try {
            $idInversion = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE inversion SET invEstado = ? WHERE idInversion = ?', [$estado, $idInversion]);

            return response()->json(['message' => 'Estado del producto actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['message' => 'Error al actualizar el estado del producto: ' . $e->getMessage()], 500);
        }
    }
}
