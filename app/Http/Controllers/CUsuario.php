<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CUsuario extends Controller
{
    public function registro(Request $request)
    {
        try {

            if ($request->has('patrocinador')) {

                $patrocinador = $request->input('patrocinador');
            } else {
                $patrocinador = NULL;
            }

            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $codigo = substr(str_shuffle($permitted_chars), 0, 25);

            //$patrocinador = $request->input('patrocinador');


            $documento = $request->input('documento');
            $nombre = $request->input('nombre');
            $apellido = $request->input('apellido');
            $correo = $request->input('correo');
            $telefono = $request->input('telefono');
            $direccion = $request->input('direccion');
            $login = $request->input('login');
            //$clave = Hash::make($request->input('clave'));
            $clave = Hash::make($request->input('clave'));


            DB::insert('INSERT INTO usuario (
                usuPatrocinador,
                usuFecRegistro,
                usuCodigo,
                usuDocumento,
                usuNombre,
                usuApellido,
                usuCorreo,
                usuTelefono,
                usuDireccion,
                usuLogin,
                usuClave,
                rol_idRol,
                estado_idEstado
                ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)', [
                $patrocinador,
                date('Y-m-d H:i:s'),
                $codigo,
                $documento,
                $nombre,
                $apellido,
                $correo,
                $telefono,
                $direccion,
                $login,
                $clave,
                2,
                1
            ]);

            return response()->json(['message' => 'Usuario agregado con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al agregar el usuario: ' . $e->getMessage()], 500);
        }
    }
}
