<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CComision extends Controller
{
    public function listar($id)
    {
        $data = DB::table('comision as c')
            ->join('usuario_inversion as i', 'i.id_usu_inv', '=', 'c.usu_inv')
            ->join('inversion as p', 'p.idInversion', '=', 'i.inversion_idInversion')
            ->join('usuario as u', 'u.idUsuario', '=', 'i.usuario_idUsuario')
            ->select('c.*', 'i.*', 'p.*', 'u.*')
            ->where('c.usuario_idUsuario', $id)
            ->whereIn('c.comEstado', ['PENDIENTE', 'FINALIZADO'])
            ->where('c.comTipo', 1)
            ->paginate(10);

        // Eliminar la columna 'imagen' de cada elemento en el resultado
        foreach ($data as &$item) {
            unset($item->imagen);
        }

        return response()->json($data);
    }

    public function listar_comision_curso($id)
    {

        $data = DB::table('comision as c')
            ->join('usuario_curso as uc', 'uc.id_usu_cur', '=', 'c.usu_cur')
            ->join('curso as cur', 'cur.idCurso', '=', 'uc.curso_idCurso')
            ->join('usuario as u', 'u.idUsuario', '=', 'uc.usuario_idUsuario')
            ->select('c.*', 'uc.*', 'cur.*', 'u.*') // Selecciona todas las columnas de todas las tablas involucradas
            ->where('c.usuario_idUsuario', $id)
            ->whereIn('c.comEstado', ['PENDIENTE', 'FINALIZADO'])
            ->where('c.comTipo', 2)
            ->paginate(10);

        return response()->json($data);
    }


    public function lista_comision_bot($id)
    {

        $data = DB::table('comision as c')
            ->join('usuario_bots as ub', 'ub.id_usu_bot', '=', 'c.usu_bot')
            ->join('bots as bot', 'bot.idBot', '=', 'ub.bot_idBot')
            ->join('usuario as u', 'u.idUsuario', '=', 'ub.usuario_idUsuario')
            ->select('c.*', 'ub.*', 'bot.*', 'u.*') // Selecciona todas las columnas de todas las tablas involucradas
            ->where('c.usuario_idUsuario', $id)
            ->whereIn('c.comEstado', ['PENDIENTE', 'FINALIZADO'])
            ->where('c.comTipo', 4)
            ->paginate(10);

        return response()->json($data);
    }

    public function listar_comision_arbol($id)
    {
        $data = DB::table('comision')
            ->select('*')
            ->where('usuario_idUsuario', $id)
            ->whereIn('comEstado', ['PENDIENTE', 'FINALIZADO'])
            ->where('comTipo', 3)
            ->paginate(10);

        //dd( $data );

        return response()->json($data);
    }

    public function comision_binario($id)
    {

        $sql = "
        SELECT IFNULL(SUM(c.comValor), 0) AS suma_total
        FROM comision AS c
        WHERE 
        c.comEstado = 'FINALIZADO' AND
        c.comTipo = 3 AND
        c.usuario_idUsuario = '$id'
    ";


        $data = DB::select($sql);

        //dd($data);

        if (!empty($data)) {
            $total = $data[0]->suma_total; // Accede al valor de suma_total
            return response()->json([
                'status' => 200,
                'message' => 'Datos obtenidos con éxito',
                'data' => $total,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Datos no encontrados',
            ]);
        }
    }

    public function comision_inversion($id)
    {

        $sql = "
        SELECT IFNULL(SUM(c.comValor), 0) AS suma_total
        FROM comision AS c
        WHERE 
        c.comEstado = 'FINALIZADO' AND
        c.comTipo = 1 AND
        c.usuario_idUsuario = '$id'
    ";

        $data = DB::select($sql);

        //dd($data);

        if (!empty($data)) {
            $total = $data[0]->suma_total; // Accede al valor de suma_total
            return response()->json([
                'status' => 200,
                'message' => 'Datos obtenidos con éxito',
                'data' => $total,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Datos no encontrados',
            ]);
        }
    }
    public function comision_tipo($id)
    {

        /*$sql = "
        SELECT IFNULL(SUM(c.comValor), 0) AS suma_total
        FROM comision AS c
        WHERE 
        c.comEstado = 'FINALIZADO' AND
        c.comTipo = 2 AND
        c.usuario_idUsuario = '$id'
    ";*/
        $sql = "
    SELECT 
        IFNULL(SUM(CASE WHEN c.comTipo = 1 THEN c.comValor ELSE 0 END), 0) AS suma_com_inv,
        IFNULL(SUM(CASE WHEN c.comTipo = 2 THEN c.comValor ELSE 0 END), 0) AS suma_com_cur,
        IFNULL(SUM(CASE WHEN c.comTipo = 3 THEN c.comValor ELSE 0 END), 0) AS suma_com_bin,
        IFNULL(SUM(CASE WHEN c.comTipo = 4 THEN c.comValor ELSE 0 END), 0) AS suma_com_bot
    FROM 
        comision AS c
    WHERE 
        c.comEstado = 'FINALIZADO' AND
        c.usuario_idUsuario = '$id'
";


        $data = DB::select($sql);

        //dd($data);

        if (!empty($data)) {
            $total = $data[0];
            return response()->json([
                'status' => 200,
                'message' => 'Datos obtenidos con éxito',
                'data' => $total,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Datos no encontrados',
            ]);
        }
    }


}
