<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;
use App\Services\NodoService;
use App\Services\InversionService;
use Illuminate\Support\Facades\Log;
use App\Models\PosicionNodoUsuInv;

class CAdministracion extends Controller
{

    protected $nodoService;
    protected $inversionService;

    public function __construct(NodoService $nodoService, InversionService $inversionService)
    {
        $this->nodoService = $nodoService;
        $this->inversionService = $inversionService;
    }


    public function listar_curso()
    {

        $data = DB::table('usuario_curso as uc')
            ->join('usuario as u', 'u.idUsuario', '=', 'uc.usuario_idUsuario')
            ->join('pago as p', 'p.idPago', '=', 'uc.pago_idPago')
            ->join('curso as c', 'c.idCurso', '=', 'uc.curso_idCurso')
            ->where('uc.usu_cur_estado', 'PENDIENTE')
            ->select('uc.*', 'u.*', 'p.*', 'c.*') // Especifica las columnas que necesitas
            ->paginate(10);

        return response()->json($data);
    }

    public function listar_bot()
    {

        $data = DB::table('usuario_bots as ub')
            ->join('usuario as u', 'u.idUsuario', '=', 'ub.usuario_idUsuario')
            ->join('pago as p', 'p.idPago', '=', 'ub.pago_idPago')
            ->join('bots as b', 'b.idBot', '=', 'ub.bot_idBot')
            ->where('ub.usu_bot_estado', 'PENDIENTE')
            ->select('ub.*', 'u.*', 'p.*', 'b.*') // Especifica las columnas que necesitas
            ->paginate(10);

        return response()->json($data);
    }

    public function listar_inversion()
    {
        $data = DB::table('usuario_inversion as ui')
            ->join('usuario as u', 'u.idUsuario', '=', 'ui.usuario_idUsuario')
            ->join('pago as p', 'p.idPago', '=', 'ui.pago_idPago')
            ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
            ->where('ui.usu_inv_estado', 'PENDIENTE')
            ->select('ui.*', 'u.*', 'p.*', 'i.*') // Especifica las columnas que necesitas
            ->paginate(10);

        // Eliminar la columna 'imagen' de cada elemento en el resultado
        foreach ($data as &$item) {
            unset($item->imagen);
        }


        return response()->json($data);
    }


    public function listar_adelanto()
    {
        $data = DB::table('usuario_pago as up')
            ->join('usuario_inversion as ui', 'ui.id_usu_inv', '=', 'up.usuario_inversion')
            ->join('usuario as u', 'u.idUsuario', '=', 'ui.usuario_idUsuario')
            ->join('metodo_pago as mp', 'mp.usuario_idUsuario', '=', 'u.idUsuario')
            ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
            ->leftJoin(
                DB::raw('
            (SELECT IFNULL(SUM(usu_pag_monto), 0) as total_pago, usuario_inversion FROM usuario_pago 
            WHERE usu_pag_estado = "REALIZADO" GROUP BY usuario_inversion) as upago'),
                'upago.usuario_inversion',
                '=',
                'ui.id_usu_inv'
            )
            ->where('mp.metEstado', 'ACTIVO')
            ->where('up.usu_pag_estado', 'PENDIENTE')
            ->select('up.*', 'ui.*', 'u.*', 'mp.*', 'i.*', DB::raw('IFNULL(upago.total_pago, 0) as total_pago'))
            ->orderBy('up.usu_pag_fecha', 'asc')
            ->paginate(10);


        // Eliminar la columna 'imagen' de cada elemento en el resultado
        foreach ($data as &$item) {
            unset($item->imagen);
        }

        return response()->json($data);
    }

    public function listar_inversion_actual()
    {
        try {


            $data = DB::table('usuario_inversion as ui')
                ->join('usuario as u', 'u.idUsuario', '=', 'ui.usuario_idUsuario')
                ->join('inversion as i', 'i.idInversion', '=', 'ui.inversion_idInversion')
                ->leftJoin('metodo_pago as mp', 'mp.usuario_idUsuario', '=', 'u.idUsuario')
                ->select('*')
                ->whereIn('ui.usu_inv_estado', ['EN PROCESO', 'FINALIZADO'])
                ->paginate(10);

            foreach ($data as &$item) {
                unset($item->imagen);
            }

            return response()->json($data);
        } catch (\Exception $e) {
            // Obtener el mensaje de error
            $errorMessage = $e->getMessage();
            // Devolver una respuesta de error con el mensaje de error real
            return response()->json(['error' => $errorMessage], 500);
        }

    }


    /*public function listar_inversion_actual()
    {
        $fecha = date('y-m-d');

        $sql = "SELECT ui.*, u.*, i.*,mp.*, IFNULL(up.total_pago, 0) AS total_pago
        FROM usuario_inversion AS ui
        INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario
        INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = u.idUsuario
        LEFT JOIN (
            SELECT IFNULL(SUM(usu_pag_monto), 0) AS total_pago, usuario_inversion 
            FROM usuario_pago 
            WHERE usu_pag_estado = 'REALIZADO' 
            GROUP BY usuario_inversion
        ) AS up ON up.usuario_inversion = ui.id_usu_inv
        WHERE mp.metEstado = 'ACTIVO' 
        AND ui.usu_inv_estado = 'EN PROCESO'
        AND ui.inv_fecha_final <= '$fecha'
        ORDER BY ui.inv_fecha_final ASC";

        $data = DB::select($sql);

        // Eliminar la columna 'imagen' de cada elemento en el resultado
        foreach ($data as &$item) {
            unset($item->imagen);
        }

        return response()->json($data);
    }*/

    public function listar_usuario()
    {
        /*$sql = "SELECT * FROM usuario AS u
        INNER JOIN estado AS e ON e.idEstado = u.estado_idEstado
        INNER JOIN rol AS r ON r.idRol = u.rol_idRol
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = u.idUsuario
        
        WHERE 
        mp.metEstado='ACTIVO'";

        $data = DB::select($sql);*/

        $data = DB::table('usuario as u')
            ->join('estado as e', 'e.idEstado', '=', 'u.estado_idEstado')
            ->join('rol as r', 'r.idRol', '=', 'u.rol_idRol')
            ->leftJoin('metodo_pago as mp', 'mp.usuario_idUsuario', '=', 'u.idUsuario')
            ->where('mp.metEstado', 'ACTIVO')
            ->select('*')
            ->paginate(10);


        return response()->json($data);
    }

    public function listar_comision()
    {
        $sql = "SELECT 
            usu.usuDocumento AS 'paguese_doc',
            CONCAT_WS(' ', usu.usuNombre, usu.usuApellido) AS 'paguese_nom',
            mp.metBanco AS 'banco',
            mp.metTipo AS 'tipo',
            mp.metNumero AS 'numero',
            c.comValor AS 'valor_com',
            CONCAT_WS(' ', u.usuNombre, u.usuApellido) AS 'concepto_nom',
            CONCAT_WS(' ', p.invNombre, p.invValor) AS 'concepto_inv',
            c.comEstado AS 'estado',
            c.idComision AS 'id'
        FROM comision AS c
            INNER JOIN usuario AS usu ON usu.idUsuario = c.usuario_idUsuario
            INNER JOIN usuario_inversion AS i ON i.id_usu_inv = c.usu_inv
            INNER JOIN inversion AS p ON p.idInversion = i.inversion_idInversion
            INNER JOIN usuario AS u ON u.idUsuario = i.usuario_idUsuario
            LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = usu.idUsuario 

            WHERE 
            mp.metEstado = 'ACTIVO' AND
            (i.usu_inv_estado ='EN PROCESO' OR i.usu_inv_estado ='FINALIZADO')AND
            c.comEstado = 'PENDIENTE'
            AND c.comTipo = 1
            ";
        $data = DB::select($sql);

        //  dd($data);

        // Eliminar la columna 'imagen' de cada elemento en el resultado
        foreach ($data as &$item) {
            unset($item->imagen);
        }

        return response()->json($data);
    }

    public function listar_comision_curso()
    {
        $sql = "SELECT 
        usu.usuDocumento AS 'paguese_doc',
        CONCAT_WS(' ', usu.usuNombre, usu.usuApellido) AS 'paguese_nom',
        mp.metBanco AS 'banco',
        mp.metTipo AS 'tipo',
        mp.metNumero AS 'numero',
        c.comValor AS 'valor_com',
        CONCAT_WS(' ', u.usuNombre, u.usuApellido) AS 'concepto_nom',
        CONCAT_WS(' ', cur.curNombre, cur.curValor) AS 'concepto_cur',
        c.comEstado AS 'estado',
        c.idComision AS 'id'
        FROM comision AS c
            INNER JOIN usuario AS usu ON usu.idUsuario = c.usuario_idUsuario
            INNER JOIN usuario_curso AS uc ON uc.id_usu_cur = c.usu_cur
            INNER JOIN curso AS cur ON cur.idCurso = uc.curso_idCurso
            INNER JOIN usuario AS u ON u.idUsuario = uc.usuario_idUsuario
            LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = usu.idUsuario 

            WHERE 
            mp.metEstado = 'ACTIVO' AND
            (uc.usu_cur_estado ='EN PROCESO' OR uc.usu_cur_estado ='FINALIZADO')AND
            c.comEstado = 'PENDIENTE'
            AND c.comTipo = 2
            ";
        $data = DB::select($sql);
        //  dd($data);

        return response()->json($data);
    }


    public function listar_comision_bot()
    {
        $sql = "SELECT 
        usu.usuDocumento AS 'paguese_doc',
        CONCAT_WS(' ', usu.usuNombre, usu.usuApellido) AS 'paguese_nom',
        mp.metBanco AS 'banco',
        mp.metTipo AS 'tipo',
        mp.metNumero AS 'numero',
        c.comValor AS 'valor_com',
        CONCAT_WS(' ', u.usuNombre, u.usuApellido) AS 'concepto_nom',
        CONCAT_WS(' ', b.botNombre, b.botValor) AS 'concepto_cur',
        c.comEstado AS 'estado',
        c.idComision AS 'id'
        FROM comision AS c
            INNER JOIN usuario AS usu ON usu.idUsuario = c.usuario_idUsuario
            INNER JOIN usuario_bots AS ub ON ub.id_usu_bot = c.usu_bot
            INNER JOIN bots AS b ON b.idBot = ub.bot_idBot
            INNER JOIN usuario AS u ON u.idUsuario = ub.usuario_idUsuario
            LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = usu.idUsuario 

            WHERE 
            mp.metEstado = 'ACTIVO' AND
            (ub.usu_bot_estado ='EN PROCESO' OR ub.usu_bot_estado ='FINALIZADO')AND
            c.comEstado = 'PENDIENTE'
            AND c.comTipo = 4
            ";
        $data = DB::select($sql);
        //  dd($data);

        return response()->json($data);
    }

    public function estado_curso(Request $request)
    {
        try {
            $idCurso = $request->input('id');
            $estado = $request->input('estado');

            $sql = "SELECT * FROM usuario_curso AS uc
            INNER JOIN pago AS p ON p.idPago = uc.pago_idPago 
            INNER JOIN usuario AS u ON u.idUsuario = uc.usuario_idUsuario
            INNER JOIN curso AS c ON c.idCurso = uc.curso_idCurso
            WHERE 
            uc.id_usu_cur = '$idCurso'";
            $data = DB::select($sql);


            if ($estado == 'FINALIZADO') {

                if ($data[0]->pagoMetodo === 'fichas') {

                    if ($data[0]->usuSaldo < $data[0]->curValor) {

                        return response()->json([
                            'status' => 201,
                            'message' => 'En este momento no puedes realizar esta accion, el usuario no cuenta con el saldo suficiente para realizar la compra.'
                        ], 201);
                    }

                    $total = $data[0]->usuSaldo - $data[0]->curValor;
                    DB::table('usuario')
                        ->where('idUsuario', $data[0]->usuario_idUsuario)
                        ->update([
                            'usuSaldo' => $total,
                        ]);


                    DB::insert(
                        'INSERT INTO historial_saldo (his_sal_fecha, usu_emi, usu_rec, his_sal_monto, his_sal_observacion, his_sal_descripcionEmi) VALUES (?,?,?,?,?,?)',
                        [$data[0]->cur_fecha, $data[0]->idUsuario, 1, $data[0]->curValor, 'Transferencia Realizada', 'Giro a Surebets']
                    );
                }

                $cuerpo = View::make('emails.curso_finalizado', ['nom_curso' => $data[0]->curNombre])->render();
            } else {

                // Renderiza la vista a una cadena de texto
                $cuerpo = View::make('emails.curso_anulado', ['nom_curso' => $data[0]->curNombre])->render();
            }

            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Informacion curso';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            DB::update('UPDATE usuario_curso SET usu_cur_estado = ? WHERE id_usu_cur = ?', [$estado, $idCurso]);


            return response()->json(['status' => 200, 'message' => 'Estado del curso actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el curso: ' . $e->getMessage()], 500);
        }
    }


    public function estado_inversion(Request $request)
    {
        // Inicia una transacción
        DB::beginTransaction();

        try {
            $idInversion = $request->input('id');
            $estado = $request->input('estado');

            //Log::info('En proceso .', ['test', 'ingreso']);
            /*$sql_inv = "SELECT * from usuario AS u
                INNER JOIN usuario_inversion AS ui ON ui.usuario_idUsuario = u.idUsuario
                INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
                WHERE ui.id_usu_inv ='$idInversion'";*/


            $sql_inv = "SELECT * from usuario_inversion AS ui
                        INNER JOIN pago AS p ON p.idPago = ui.pago_idPago 
                        INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario
                        INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
                        WHERE ui.id_usu_inv ='$idInversion'";

            $data_inv = DB::select($sql_inv);


            //Log::info('Estado .', ['data', $data_inv]);

            /*Log::info('En proceso .', [
                'pagoMetodo' => $data_inv[0]->pagoMetodo,
                'saldo' => $data_inv[0]->usuSaldo,
                'costo' => $data_inv[0]->invValor
            ]);*/

            if ($estado === 'ANULADO') {

                $cuerpo = View::make('emails.inversion_anulado', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias])->render();
                DB::update('UPDATE comision SET comEstado = ? WHERE usu_inv = ?', [$estado, $idInversion]);
            } else {


                $sql_consult_nodo = "
            SELECT * FROM usuario AS u 
            INNER JOIN posicion_nodo_usuinv AS pnodo ON pnodo.usr_referido_id = u.idUsuario 
            WHERE (pnodo.estado_posicion = 'PENDIENTE' OR pnodo.estado_posicion = 'REASIGNADO')
            AND u.idUsuario = ?
        ";

                // Execute the query with parameter binding to prevent SQL injection
                $result_consul_nodo = DB::select($sql_consult_nodo, [$data_inv[0]->idUsuario]);



                // Check if the result is empty or if the result count is zero
                if (count($result_consul_nodo) === 0) {
                    return response()->json([
                        'status' => 201,
                        'message' => 'El usuario no cuenta con una posición en el árbol, por favor infórmele al usuario para que le asigne una posición.'
                    ], 201);
                }

                if ($data_inv[0]->pagoMetodo === 'fichas') {

                    if ($data_inv[0]->usuSaldo < $data_inv[0]->invValor) {

                        return response()->json([
                            'status' => 201,
                            'message' => 'En este momento no puedes realizar esta accion, el usuario no cuenta con el saldo suficiente para realizar la compra.'
                        ], 201);
                    }

                    $total = $data_inv[0]->usuSaldo - $data_inv[0]->invValor;
                    DB::table('usuario')
                        ->where('idUsuario', $data_inv[0]->idUsuario)
                        ->update([
                            'usuSaldo' => $total,
                        ]);


                    DB::insert(
                        'INSERT INTO historial_saldo (his_sal_fecha, usu_emi, usu_rec, his_sal_monto, his_sal_observacion, his_sal_descripcionEmi) VALUES (?,?,?,?,?,?)',
                        [$data_inv[0]->inv_fecha_inicio, $data_inv[0]->idUsuario, 1, $data_inv[0]->invValor, 'Transferencia Realizada', 'Giro a Surebets']
                    );
                }

                //Usuario estado 3 y posicion_nodo_usuinv = anulado
                $cuerpo = View::make('emails.inversion_finalizado', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias])->render();
            }

            //Log::info('En proceso .', ['id inversion', $data_inv]);
            //Log::info('Estado .', ['id inversion', $estado]);

            DB::update('UPDATE usuario_inversion SET usu_inv_estado = ? WHERE id_usu_inv = ?', [$estado, $idInversion]);

            //Log::info('Estado .', ['id inversion', $estado]);


            $verificar_comision = null;


            if ($estado == 'EN PROCESO') {
                $usuario_idUsuario = $data_inv[0]->usuario_idUsuario;
                $usuPatrocinador = $data_inv[0]->usuPatrocinador;

                //buscar posicion guardada con id usuario de inversion
                Log::info("usr referido id", ["usuario" => $usuario_idUsuario]);

                $posicionNodoUsuInv = PosicionNodoUsuInv::where('usr_referido_id', $usuario_idUsuario)
                    //->where('estado_posicion', 'PENDIENTE')
                    ->whereIn('estado_posicion', ['PENDIENTE', 'REASIGNADO'])
                    ->first();
                //Log::info("posicion PENDIENTE", ["posicion" => $posicionNodoUsuInv]);

                // validacion que tenga inversiones anteriorermente para actualizar posicion nodo
                $registroFinalizado = DB::table('usuario_inversion')
                    ->where('usuario_idUsuario', $usuario_idUsuario)
                    ->whereIn('usu_inv_estado', ['FINALIZADO'])
                    ->get();
                if ($registroFinalizado->isNotEmpty()) {
                    // Recorrer cada registro
                    foreach ($registroFinalizado as $registro) {
                        $idUsuInv = $registro->id_usu_inv;

                        // Actualizar la tabla nodo_usu_inversion
                        DB::table('nodo_usu_inversion')
                            ->where('nodo_padre', $idUsuInv)
                            ->update([
                                'nodo_padre' => $idInversion
                            ]);

                        DB::table('nodo_usu_inversion')
                            ->where('usu_inv_id', $idUsuInv)
                            ->update([
                                'usu_inv_id' => $idInversion
                            ]);
                    }
                }


                if ($posicionNodoUsuInv === null) {
                    //Log::info('La consulta no arrojó resultados.');
                    $posicionAsignada = PosicionNodoUsuInv::where('usr_referido_id', $usuario_idUsuario)
                        ->where('estado_posicion', 'ASIGNADO')
                        ->first();
                    if ($posicionAsignada !== null) {
                        $invFinalizadas = DB::table('usuario_inversion')
                            ->where('usuario_idUsuario', $usuario_idUsuario)
                            //->where('usuario_inv_estado', 'FINALIZADO')
                            ->where('usu_inv_estado', 'FINALIZADO')
                            ->get();

                        // Si hay inversiones finalizadas, obtener un array de id_usuario_inv
                        if ($invFinalizadas->isNotEmpty()) {
                            $idUsuarioInvArray = $invFinalizadas->pluck('id_usu_inv')->toArray();

                            // Recorrer $idUsuarioInvArray y buscar en la tabla nodo_usu_inversion
                            foreach ($idUsuarioInvArray as $idUsuInv) {
                                DB::table('nodo_usu_inversion')
                                    ->where('usu_inv_id', $idUsuInv)
                                    ->update(['nodo_padre' => $idInversion]);
                            }
                        }
                    }
                } else {

                    $id_posicion = $posicionNodoUsuInv->id;

                    $usuPatrocinador = $data_inv[0]->usuPatrocinador;
                    $posicion = $posicionNodoUsuInv->posicion ?? null;
                    $nivel = $posicionNodoUsuInv->nivel_nodo ?? 0;
                    $nodoPadre = $posicionNodoUsuInv->nodo_padre ?? null;
                    $tipoNodo = $posicionNodoUsuInv->usr_referido_id ? ($nivel == 1 ? 'Padre' : 'Hijo') : 'Raiz';

                    // Inserción del nodo en la tabla nodo_arbol
                    $this->nodoService->insertarNodo($idInversion, $nodoPadre, $tipoNodo, $posicion, $nivel);

                    $this->nodoService->actualizarPosicionNodo($id_posicion);

                    $act_tabla_comision = $this->inversionService->acutalizar_comisiones_x_binario();

                    //Log::info("funcion estado inversion", ["estado inversion" => $verificar_comision]);

                }
            }


            $destinatario = $data_inv[0]->usuCorreo;
            $asunto = 'Informacion Inversion';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            // Confirma la transacción si todas las consultas se ejecutan correctamente
            DB::commit();

            return response()->json(['status' => 200, 'message' => 'Estado de la inversión actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, deshace la transacción
            DB::rollBack();

            // Maneja la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar la inversión: ' . $e->getMessage()], 500);
        }
    }


    public function estado_bot(Request $request)
    {
        try {
            $idBot = $request->input('id');
            $estado = $request->input('estado');

            $sql = "SELECT * FROM usuario_bots AS ub
            INNER JOIN pago AS p ON p.idPago = ub.pago_idPago 
            INNER JOIN usuario AS u ON u.idUsuario = ub.usuario_idUsuario
            INNER JOIN bots AS b ON b.idBot = ub.bot_idBot
            WHERE 
            ub.id_usu_bot = '$idBot'";
            $data = DB::select($sql);


            if ($estado == 'FINALIZADO') {

                if ($data[0]->pagoMetodo === 'fichas') {

                    if ($data[0]->usuSaldo < $data[0]->botValor) {

                        return response()->json([
                            'status' => 201,
                            'message' => 'En este momento no puedes realizar esta accion, el usuario no cuenta con el saldo suficiente para realizar la compra.'
                        ], 201);
                    }



                    $total = $data[0]->usuSaldo - $data[0]->botValor;
                    DB::table('usuario')
                        ->where('idUsuario', $data[0]->usuario_idUsuario)
                        ->update([
                            'usuSaldo' => $total,
                        ]);


                    DB::insert(
                        'INSERT INTO historial_saldo (his_sal_fecha, usu_emi, usu_rec, his_sal_monto, his_sal_observacion, his_sal_descripcionEmi) VALUES (?,?,?,?,?,?)',
                        [$data[0]->bot_fecha, $data[0]->idUsuario, 1, $data[0]->botValor, 'Transferencia Realizada', 'Giro a Surebets']
                    );
                }

                $cuerpo = View::make('emails.bot_finalizado', ['nom_bot' => $data[0]->botNombre])->render();
            } else {

                // Renderiza la vista a una cadena de texto
                $cuerpo = View::make('emails.bot_anulado', ['nom_bot' => $data[0]->botNombre])->render();
            }

            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Informacion Bot';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            DB::update('UPDATE usuario_bots SET usu_bot_estado = ? WHERE id_usu_bot = ?', [$estado, $idBot]);


            return response()->json(['status' => 200, 'message' => 'Estado del bot actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el bot: ' . $e->getMessage()], 500);
        }
    }


    public function estado_usuario(Request $request)
    {
        try {
            $idUsuario = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE usuario SET estado_idEstado = ? WHERE idUsuario = ?', [$estado, $idUsuario]);

            return response()->json(['status' => 200, 'message' => 'Estado del usuario actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function estado_usuario_giro(Request $request)
    {
        try {

            $idUsuario = $request->input('id');
            $estado = $request->input('estado');

            DB::update('UPDATE usuario SET usuGiro = ? WHERE idUsuario = ?', [$estado, $idUsuario]);

            return response()->json(['status' => 200, 'message' => 'Estado del usuario actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function estado_comision(Request $request)
    {
        try {
            $idComision = $request->input('id');
            $estado = $request->input('estado');


            $sql = "SELECT * FROM comision AS c
            INNER JOIN usuario AS u ON u.idUsuario = c.usuario_idUsuario
            WHERE 
            c.idComision = '$idComision'";
            $data = DB::select($sql);



            $cuerpo = View::make('emails.comision', ['val_com' => $data[0]->comValor])->render();
            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Informacion Comision';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);


            DB::update('UPDATE comision SET comEstado = ? WHERE idComision = ?', [$estado, $idComision]);


            return response()->json(['status' => 200, 'message' => 'Estado de la comision actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el estado de la comision: ' . $e->getMessage()], 500);
        }
    }


    public function estado_adelanto(Request $request)
    {
        try {
            $idAdelanto = $request->input('id');
            $estado = $request->input('estado');

            //dd($estado);

            $sql = "SELECT * FROM usuario_pago AS up
            INNER JOIN usuario_inversion AS ui ON ui.id_usu_inv = up.usuario_inversion
            INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario

            WHERE 
            up.id_usu_pag = '$idAdelanto'";
            $data = DB::select($sql);


            $cuerpo = View::make('emails.adelanto', ['val_ade' => $data[0]->usu_pag_monto, 'estado' => $estado])->render();
            $destinatario = $data[0]->usuCorreo;
            $asunto = 'Informacion Adelanto Inversion';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);


            DB::update('UPDATE usuario_pago SET usu_pag_estado = ? WHERE id_usu_pag  = ?', [$estado, $idAdelanto]);


            return response()->json(['status' => 200, 'message' => 'Estado del adelanto actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el estado del adelanto: ' . $e->getMessage()], 500);
        }
    }

    public function listar_comision_especial()
    {
        $sql = "SELECT 
        u.usuDocumento AS 'paguese_doc',
        CONCAT_WS(' ', u.usuNombre, u.usuApellido) AS 'paguese_nom',
        mp.metBanco AS 'banco',
        mp.metTipo AS 'tipo',
        mp.metNumero AS 'numero',
        c.comValor AS 'valor_com',
        c.comEstado AS 'estado',
        c.idComision AS 'id',
        c.comDescripcion AS 'descripcion'
        
         FROM comision AS c
        INNER JOIN usuario AS u ON u.idUsuario = c.usuario_idUsuario
        LEFT JOIN metodo_pago AS mp ON mp.usuario_idUsuario = u.idUsuario 

        WHERE 
        mp.metEstado = 'ACTIVO' AND
        c.comEstado = 'PENDIENTE'
        AND c.comTipo = 3";
        $data = DB::select($sql);

        // dd($data);

        return response()->json($data);
    }

    public function lista_pago_mensual($id)
    {
        try {

            // Consulta sin paginación
            $data = DB::table('payment as pay')
                ->where('pay.investment_id', $id)
                ->orderBy('pay.payment_number', 'asc')
                ->get();  // Obtiene todos los resultados

            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener los datos'], 500);
        }
    }

    public function estado_pago(Request $request)
    {

        try {

            $id = $request->input('id');
            $estado = $request->input('estado');

            $sql_inv = "SELECT * from payment AS p
            INNER JOIN usuario_inversion AS ui ON ui.id_usu_inv = p.investment_id
            INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario
            INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
            WHERE p.id_pag_inv ='$id'";

            $data_inv = DB::select($sql_inv);

            $cuerpo = View::make('emails.pago_mensual', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias, 'pago_mensual' => $data_inv[0]->amount, 'pago_numero' => $data_inv[0]->payment_number])->render();
            $destinatario = $data_inv[0]->usuCorreo;
            $asunto = 'Informacion Pago Mensual';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);


            DB::update('UPDATE payment SET status = ? WHERE id_pag_inv = ?', [$estado, $id]);

            return response()->json(['status' => 200, 'message' => 'Estado actualizado exitosamente'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el estado: ' . $e->getMessage()], 500);
        }

    }


    public function estado_inversion_finalizar(Request $request)
    {
        try {
            $id = $request->input('id');
            $estado = $request->input('estado');

            //dd($estado);

            // Consulta para verificar si existen pagos pendientes
            $sql = "SELECT * FROM payment AS p
        WHERE p.status = 'pending' AND p.investment_id = ?";
            $data = DB::select($sql, [$id]);

            // Si hay pagos pendientes, devolver un mensaje de error
            if (count($data) > 0) {
                return response()->json([
                    'status' => 201,
                    'message' => 'No se puede finalizar aún porque el usuario tiene pagos mensuales pendientes.'
                ], 201);
            }


            $sql_inv = "SELECT * from usuario_inversion AS ui
            INNER JOIN usuario AS u ON u.idUsuario = ui.usuario_idUsuario
            INNER JOIN inversion AS i ON i.idInversion = ui.inversion_idInversion
            WHERE ui.id_usu_inv ='$id'";

            $data_inv = DB::select($sql_inv);

            $cuerpo = View::make('emails.terminacion_inversion', ['nom_inv' => $data_inv[0]->invNombre, 'val_inv' => $data_inv[0]->invValor, 'dia_inv' => $data_inv[0]->inv_dias])->render();
            $destinatario = $data_inv[0]->usuCorreo;
            $asunto = 'Informacion Finalizacion Inversion';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);


            DB::update('UPDATE usuario_inversion SET usu_inv_estado = ? WHERE id_usu_inv  = ?', [$estado, $id]);


            return response()->json(['status' => 200, 'message' => 'Estado actualizado exitosamente'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar el estado: ' . $e->getMessage()], 500);
        }
    }

}
