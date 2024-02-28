<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class CContenidoMaterial extends Controller
{
    
    
    public function listar($id)
    {

        try {
            $data = DB::table('material as m')
                ->join('contenido as cont', 'cont.idContenido', '=', 'm.contenido_idContenido')
                ->join('curso as c', 'c.idCurso', '=', 'cont.curso_idCurso')
                ->where('m.contenido_idContenido', $id)
                ->select('m.matNombre', 'm.idMaterial', 'm.matTipoArchivo', 'cont.*', 'c.curNombre') // Asegúrate de seleccionar solo los campos necesarios
                ->paginate(10);

            return response()->json($data);
        } catch (QueryException $e) {
            Log::error('Error al agregar material', [
                'error' => $e->getMessage(),

            ]);
            // Manejar la excepción
            return response()->json(['error' => 'Error en la consulta de la base de datos'], 500);
        }
    }


    public function showMaterial($idMaterial)
    {
        try {

            $sql = "SELECT * FROM material AS m
        WHERE 
        m.idMaterial = '$idMaterial'";
            $data = DB::select($sql);

            // dd($data);

            return response()->json($data);

            // $material = DB::table('material')->where('idMaterial', $idMaterial)->first();

            /*$archivo = $material->matArchivo; // El BLOB
            $tipoArchivo = $material->matTipoArchivo; // El tipo MIME

            return response($archivo)->header('Content-Type', $tipoArchivo);*/
        } catch (QueryException $e) {
            Log::error('Error al agregar material', [
                'error' => $e->getMessage(),
            ]);
            // Manejar la excepción
            return response()->json(['error' => 'Error en la consulta de la base de datos'], 500);
        }
    }


    public function agregar(Request $request)
    {

        try {

            $idContenido = $request->input('idContenido');
            $matNombre = $request->input('matNombre');
            $archivo = $request->file('matArchivo');

            if ($archivo && $archivo->isValid()) {
                $matTipo = $archivo->getMimeType();

                // Validar el tipo de archivo
                if ($matTipo == 'application/pdf' || $matTipo == 'video/mp4') {

                    // Obtener la ruta relativa para el acceso mediante asset()
                    $rutaRelativa = 'archivo/' . $matNombre;

                    // Insertar en la base de datos y obtener el ID insertado
                    $idInsertado = DB::table('material')->insertGetId([
                        'matNombre' => $matNombre,
                        'matArchivo' => $rutaRelativa,
                        'contenido_idContenido' => $idContenido,
                        'matTipoArchivo' => $matTipo,
                    ]);

                    // Modificar el nombre del archivo para incluir el ID
                    $nombreArchivoConId = $matNombre . '_' . $idInsertado;
                    // Guardar el archivo en la carpeta public/archivo
                    $ruta = $archivo->storeAs('archivo', $nombreArchivoConId, 'public');

                    return response()->json(['message' => 'Material agregado con éxito'], 201);
                } else {
                    throw new \Exception('Tipo de archivo no admitido.');
                }
            } else {
                throw new \Exception('No se pudo cargar el archivo o el archivo no es válido.');
            }
        } catch (\Exception $e) {
            Log::error('Error al agregar material', [
                'error' => $e->getMessage(),
            ]);
            return response()->json(['message' => 'Error al agregar el Material: ' . $e->getMessage()], 500);
        }
    }
}
