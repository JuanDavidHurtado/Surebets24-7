<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CProducto extends Controller
{

    public function listar()
    {
        $sql = "SELECT * FROM inversion";
        $data = DB::select($sql);

        // Itera sobre los datos y codifica las imágenes en base64
        foreach ($data as $producto) {
            // Verifica si hay una imagen y codifícala en base64
            if ($producto->imagen) {
                $imagenBase64 = base64_encode($producto->imagen);
                // Sobrescribe el valor de la imagen con su versión codificada en base64
                $producto->imagen = $imagenBase64;
            }
        }

        return response()->json($data);
    }

    public function agregar(Request $request)
    {
        try {
            $nombre = $request->input('nombre');
            $valor = $request->input('valor');
            $valor_diario = $request->input('valor_diario');
            $dias = $request->input('dias');
            $puntos = $request->input('puntos');
            $ganancia = $request->input('ganancia');
            $comision = $request->input('comision');
            if ($request->has('imagen')) {
                $imagen = $request->file('imagen');
                $binarioContent = file_get_contents($imagen);

            }

            /*DB::insert(
                'INSERT INTO inversion (invNombre, invValor, invValorDiario,invDias,invGanancia,invPunto,invPorcentajeComision,imagen) VALUES (?,?,?,?,?,?,?,?)',
                [$nombre, $valor, $valor_diario, $dias, $puntos, $ganancia, $comision, $binarioContent]
            );*/

            DB::insert(
                'INSERT INTO inversion (invNombre, invValor, invValorDiario, invDias, invPunto, invGanancia, invPorcentajeComision,imagen) VALUES (?,?,?,?,?,?,?,?)',
                [$nombre, $valor, $valor_diario, $dias, $puntos, $ganancia, $comision, $binarioContent]
            );

            return response()->json(['message' => 'Producto agregado con éxito'], 201);
        } catch (\Exception $e) {
            Log::error('Error al insertar usuario: ' . $e->getMessage());
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

    public function actualizar(Request $request)
    {
        try {

            $idInversion = $request->input('idInversion');
            $nombre = $request->input('nombre');
            $valor = $request->input('valor');
            $valor_diario = $request->input('valor_diario');
            $dias = $request->input('dias');
            $puntos = $request->input('puntos');
            $ganancia = $request->input('ganancia');
            $comision = $request->input('comision');




            $updateData = [
                'invNombre' => $nombre,
                'invValor' => $valor,
                'invValorDiario' => $valor_diario,
                'invDias' => $dias,
                'invPunto' => $puntos,
                'invGanancia' => $ganancia,
                'invPorcentajeComision' => $comision,
            ];

            if ($request->has('imagen')) {
                $imagen = $request->file('imagen');

                Log::info('Información del archivo:', [
                    'original_name' => $imagen->getClientOriginalName(),
                    'mime_type' => $imagen->getClientMimeType(),
                    'size' => $imagen->getSize(),
                ]);
                $binarioContent = file_get_contents($imagen);

                $updateData['imagen'] = $binarioContent;
            }
            // Actualizar la inversión en la base de datos
            $affected = DB::table('Inversion')->where('idInversion', $idInversion)->update($updateData);

            if ($affected) {
                return response()->json([
                    'message' => 'Producto actualizado exitosamente'
                ]);

                alert('Producto actualizado exitosamente');
            } else {
                return response()->json([
                    'message' => 'Inversión no encontrada o no se pudo actualizar'
                ], 404);
            }

        } catch (QueryException $e) {
            return response()->json(['message' => 'Error al actualizar el producto: ' . $e->getMessage()], 500);
        }
    }

    public function obtenerProducto(request $request, $id)
    {
        try {

            $idProducto = $id;
            Log::info("dentro de obtener producto", ['id' => $idProducto]);

            $producto = DB::table('inversion')->where('idInversion', $idProducto)->first();

            if ($producto->imagen) {
                // Eliminar el campo 'imagen' del objeto $producto
                unset($producto->imagen);
            }

            Log::info("producto", ['producto' => $producto]);

            if (!$producto) {
                return response()->json(['message' => 'Producto no encontrado'], 404);
            }
            Log::info("producto para condicional");

            // Construir la URL a la que se debe redirigir
            $url = route('form_actualizar_producto', ['producto' => $producto]);

            return response()->json(['redirect_to' => $url]);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Error al obtener producto: ' . $e->getMessage()], 500);

        }
    }

    public function obtenerImagen(request $request, $id)
    {
        try {

            $idProducto = $id;
            Log::info("dentro de obtener producto", ['id' => $idProducto]);

            $usuInversion = DB::table('usuario_inversion')->where('id_usu_inv', $id)->first();
            $inversion_idInversion = $usuInversion->inversion_idInversion;
            $producto = DB::table('inversion')->where('idInversion', $inversion_idInversion)->first();

            if (!$producto) {
                return response()->json(['message' => 'Producto no encontrado'], 404);
            }


            $imagen = null;

            if ($producto->imagen) {

                // Convertir los datos binarios de la imagen a una cadena base64
                $imagenBase64 = base64_encode($producto->imagen);

                // Devolver la imagen como parte del cuerpo de la respuesta
                return response()->json(['imagen' => $imagenBase64]);

            }


            return response()->json(['message' => 'No se encontró ninguna imagen para el producto'], 404);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Error al obtener producto: ' . $e->getMessage()], 500);

        }
    }
}
