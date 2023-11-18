<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CCursousuario extends Controller
{
    public function listar()
    {
        $sql = "SELECT * FROM curso AS c WHERE c.curEstado = 'ACTIVO'";
        $data = DB::select($sql);

        return response()->json($data);
    }

    /*public function seleccion_curso($id)
    {
        $sql = "SELECT * FROM curso AS c
        INNER JOIN contenido AS cont ON cont.curso_idCurso = c.idCurso 
        WHERE c.idCurso = '$id'";
        $data = DB::select($sql);

        return response()->json($data);
    }*/

    public function seleccion_curso($id)
    {
        try {
            // Iniciar la transacción
            DB::beginTransaction();

            // Consulta principal para obtener la información del curso
            $sql = "SELECT * FROM curso AS c WHERE c.idCurso = '$id'";
            $data = DB::select($sql);

            // Verificar los datos obtenidos
            // dd($data);

            $sql_cont = "SELECT * FROM contenido AS cont WHERE cont.curso_idCurso = '$id'";
            $data_contenido = DB::select($sql_cont);

            // Array para almacenar los resultados finales
            $resultados = [];

            // Recorrer los resultados de la consulta principal
            // ...

            foreach ($data_contenido as $curso) {
                $sqlMateriales = "SELECT idMaterial, matNombre, matArchivo,  matArchivo FROM material AS m WHERE m.contenido_idContenido = '$curso->idContenido'";
                $materiales = DB::select($sqlMateriales);


                foreach ($materiales as &$material) {
                    $material->matArchivo = base64_encode($material->matArchivo);
                }

                // Agregar los resultados al array final
                $resultadoCurso = [
                    'curso' => $curso,
                    'materiales' => $materiales,
                ];

                $resultados[] = $resultadoCurso;
            }

            // dd($resultados);

            // ...


            // Confirmar la transacción
            DB::commit();



            // Devolver la respuesta JSON con los resultados
            return response()->json(['data' => $data, 'resultados' => $resultados]);
        } catch (\Exception $e) {

            // En caso de error, revertir la transacción
            DB::rollBack();
            // Maneja el error de manera adecuada
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function agregar(Request $request)
    {
        DB::beginTransaction();

        try {
            $fecha_pago = $request->input('fecha_pago');
            $hash = $request->input('hash');

            $idPagoInsertado = DB::table('pago')->insertGetId([
                'pagFecha' => $fecha_pago,
                'pagHash' => $hash
            ]);

            $fecha = date('Y-m-d');
            $usuario = 1;//id inicio sesion
            $curso = $request->input('id_curso');

            DB::insert('INSERT INTO usuario_curso
        (
            cur_fecha,
            usuario_idUsuario,
            curso_idCurso,
            pago_idPago
        ) VALUES (?,?,?,?)', [$fecha, $usuario, $curso, $idPagoInsertado]);

            DB::commit(); // Confirma la transacción

            return response()->json(['status' => 201, 'message' => 'Estamos encantados de confirmar que su curso ha sido registrado de manera exitosa en nuestro sistema. De esta manera, tendrás la oportunidad de adquirir conocimientos adicionales en nuestra academia de aprendizaje. ¡Esperamos que disfrutes de tu experiencia de aprendizaje con nosotros!'], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al agregar el registro del curso: ' . $e->getMessage()], 500);
        }
    }
}