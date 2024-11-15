<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;



class CCursousuario extends Controller
{
    public function listar()
    {
        $sql = "SELECT * FROM curso AS c WHERE c.curEstado = 'ACTIVO'";
        $data = DB::select($sql);

        return response()->json($data);
    }


    public function seleccion_curso($id, $id_usu)
    {

        //dd($id_usu);
        try {
            // Iniciar la transacción
            DB::beginTransaction();

            $id = base64_decode($id);

            // Consulta principal para obtener la información del curso
            $sql = "SELECT * FROM usuario_curso AS uc
        INNER JOIN curso AS c ON c.idCurso = uc.curso_idCurso
        WHERE 
        uc.usu_cur_estado ='FINALIZADO' AND
        uc.usuario_idUsuario = '$id_usu' AND
        c.idCurso = '$id'";
            $data = DB::select($sql);

            if (empty($data)) {
                return response()->json(['error' => 'No hay resultados para mostrar.'], 200);
            }

            $sql_cont = "SELECT * FROM contenido AS cont WHERE cont.curso_idCurso = '$id'";
            $data_contenido = DB::select($sql_cont);

            // Array para almacenar los resultados finales
            $resultados = [];

            // Recorrer los resultados de la consulta principal
            // ...

            foreach ($data_contenido as $curso) {
                $sqlMateriales = "SELECT idMaterial, matNombre, matArchivo, matTipoArchivo FROM material AS m WHERE m.contenido_idContenido = '$curso->idContenido'";
                $materiales = DB::select($sqlMateriales);


                /*foreach ($materiales as &$material) {
                    $material->matArchivo = base64_encode($material->matArchivo);
                }*/

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

            $metodo = $request->input('metodo_pago');
            $fecha_pago = $request->input('fecha_pago');
            $hash = $request->input('hash');
            $pago_metodo = 'criptomonedas';

            if ($metodo == 'fichas') {
                $fecha_pago = date('y-m-d'); //$request->input('fecha_pago');
                $hash = 'Pago realizado mediante fichas';
                $pago_metodo = 'fichas';
            }

            $idPagoInsertado = DB::table('pago')->insertGetId([
                'pagFecha' => $fecha_pago,
                'pagHash' => $hash,
                'pagoMetodo' => $pago_metodo
            ]);

            $fecha = date('Y-m-d');
            $usuario = $request->input('id'); //id inicio sesion
            $curso = base64_decode($request->input('id_curso'));


            $sql_inv = "SELECT * FROM curso AS c
            WHERE c.idCurso = '$curso'";
            $data_cur = DB::select($sql_inv);

            $idCurInsertado = DB::table('usuario_curso')->insertGetId([
                'cur_fecha' => $fecha,
                'usuario_idUsuario' => $usuario,
                'curso_idCurso' => $curso,
                'pago_idPago' => $idPagoInsertado
            ]);


            $sql = "SELECT * FROM usuario AS u WHERE u.idUsuario = '$usuario'";
            $data = DB::select($sql);

            if (sizeof($data) > 0 && $data[0]->usuPatrocinador != NULL) {

                $des = 'Rentabilizacion obtenida por medio de el usuario '
                    . $data[0]->usuLogin . ' ,por la compra del curso '
                    . $data_cur[0]->curNombre . 'por el valor de '
                    . $data_cur[0]->curValor . ' USD con una rentabilidad del '
                    . $data_cur[0]->curComision . ' %';

                $vl_com = ($data_cur[0]->curValor * $data_cur[0]->curComision) / 100;

                //dd($vl_com);
                DB::insert('INSERT INTO comision (comValor, usuario_idUsuario, usu_cur, comTipo, comDescripcion) 
                VALUES (?,?,?,?,?)', [$vl_com, $data[0]->usuPatrocinador, $idCurInsertado, 2, $des]);
            }


            // Renderiza la vista a una cadena de texto
            $cuerpo = View::make('emails.curso')->render();
            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Curso Surebets';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            DB::commit(); // Confirma la transacción

            return response()->json(['status' => 201, 'message' => 'Estamos encantados de confirmar que su curso ha sido registrado de manera exitosa en nuestro sistema. De esta manera, tendrás la oportunidad de adquirir conocimientos adicionales en nuestra academia de aprendizaje. ¡Esperamos que disfrutes de tu experiencia de aprendizaje con nosotros!'], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Revierte la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al agregar el registro del curso: ' . $e->getMessage()], 500);
        }
    }

    public function curso_usuario($id)
    {

        try {
            $data = DB::table('usuario_curso as uc')
                ->join('curso as c', 'c.idCurso', '=', 'uc.curso_idCurso')
                ->where('uc.usuario_idUsuario', $id)
                ->paginate(10);

            return response()->json($data);
        } catch (\Exception $e) {
            // Registrar el error
            //\Log::error('Error en curso_usuario: ' . $e->getMessage());

            // Devolver una respuesta de error
            return response()->json(['error' => 'Ocurrió un error al obtener los datos del curso'], 500);
        }
    }
    public function seleccion_curso_compra($id)
    {

        //dd($id_usu);
        try {
            // Iniciar la transacción
            DB::beginTransaction();

            $id = base64_decode($id);
            // Consulta principal para obtener la información del curso
            $sql = "SELECT * FROM curso AS c
        WHERE 
        c.idCurso = '$id'";
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
                $sqlMateriales = "SELECT idMaterial, matNombre, matArchivo, matTipoArchivo FROM material AS m WHERE m.contenido_idContenido = '$curso->idContenido'";
                $materiales = DB::select($sqlMateriales);


                /*foreach ($materiales as &$material) {
                    $material->matArchivo = base64_encode($material->matArchivo);
                }*/

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
}
