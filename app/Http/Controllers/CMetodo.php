<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMetodo extends Controller
{

    public function listar()
    {
        $sql = "SELECT * FROM metodo_pago AS mp
        WHERE
        mp.metEstado = 'ACTIVO' AND 
        mp.usuario_idUsuario =  '1';";
        $data = DB::select($sql);

        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        try {
            $titular = $request->input('titular');
            $banco = $request->input('banco');
            $tipo = $request->input('tipo');
            $numero = $request->input('numero');
            $documento = $request->input('documento');
            $id_usu = $request->input('id_usu');


            DB::insert('INSERT INTO metodo_pago (
                metTitular, metBanco, metTipo, metNumero, metDocumento, usuario_idUsuario) VALUES (?,?,?,?,?,?)',
             [$titular, $banco, $tipo, $numero, $documento, $id_usu]);

            return response()->json(['message' => 'Metodo de pago agregado con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al agregar el metodo de pago: ' . $e->getMessage()], 500);
        }
    }

    public function estado(Request $request)
    {
        try {
            $idMetodo = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE metodo_pago SET metEstado = ? WHERE idMetodo = ?', [$estado, $idMetodo]);

            return response()->json(['message' => 'Estado del metodo deshabilitado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['message' => 'Error al actualizar el estado del metodo: ' . $e->getMessage()], 500);
        }
    }
}
