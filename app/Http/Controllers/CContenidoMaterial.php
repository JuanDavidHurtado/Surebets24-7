<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class CContenidoMaterial extends Controller
{
     /**
     * Almacena un material recién creado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agregar(Request $request)
    {

        try {

            $idContenido = $request->input('idContenido');
            $matNombre = $request->input('matNombre');
            $archivo = $request->file('matArchivo');
            if ($archivo && $archivo->isValid()) {
                $matArchivo = file_get_contents($archivo->getRealPath());
                $matTipo = $archivo->getMimeType();
            } else {
                throw new \Exception('No se pudo cargar el archivo o el archivo no es válido.');
            }
            // Insertar en la base de datos
            $sql = "INSERT INTO material (matNombre, matArchivo, contenido_idContenido, matTipoArchivo) VALUES (?, ?, ?,?)";
            DB::insert($sql, [$matNombre, $matArchivo, $idContenido,$matTipo]);
            return response()->json(['message' => 'Material agregado con éxito'], 201);
        } catch (\Exception $e) {
            Log::error('Error al agregar material', [
                'error' => $e->getMessage(),
                'request' => $request->all()  // Incluir la información del request para depuración
            ]);
            return response()->json(['message' => 'Error al agregar el Material: ' . $e->getMessage()], 500);
        }
    }

    public function listar($id)
    {

            try {
                $data = DB::table('material as m')
                    ->join('contenido as cont', 'cont.idContenido', '=', 'm.contenido_idContenido')
                    ->join('curso as c', 'c.idCurso', '=', 'cont.curso_idCurso')
                    ->where('m.contenido_idContenido', $id)
                    ->select('m.matNombre','m.idMaterial','m.matTipoArchivo', 'cont.*','c.curNombre') // Asegúrate de seleccionar solo los campos necesarios
                    ->get();
        
                return response()->json($data);
            } catch (QueryException $e) {
                Log::error('Error al agregar material', [
                    'error' => $e->getMessage(),
                    'request' => $request->all()  // Incluir la información del request para depuración
                ]);
                // Manejar la excepción
                return response()->json(['error' => 'Error en la consulta de la base de datos'], 500);
            }
        
    }

    public function showMaterial($idMaterial) {
        try {
            
            $material = DB::table('material')->where('idMaterial', $idMaterial)->first();
            
            $archivo = $material->matArchivo; // El BLOB
            $tipoArchivo = $material->matTipoArchivo; // El tipo MIME
        
            return response($archivo)->header('Content-Type', $tipoArchivo);
        } catch (QueryException $e) {
            Log::error('Error al agregar material', [
                'error' => $e->getMessage(),
                'request' => $request->all()  // Incluir la información del request para depuración
            ]);
            // Manejar la excepción
            return response()->json(['error' => 'Error en la consulta de la base de datos'], 500);
        }
     
    }
    
}
