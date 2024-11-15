<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Utilities\CorreoUtil;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class cancelarNodo extends Command
{
    protected $signature = 'app:cancelar-nodo';
    protected $description = 'Actualizar estado nodo';

    public function handle()
    {

        // Obtener la fecha y hora actual
        $fechaActual = Carbon::now();

        // Ejecutar la consulta SQL con INNER JOIN y filtro de fecha
        $resultados = DB::select("
    SELECT *
    FROM usuario AS u
    INNER JOIN posicion_nodo_usuinv AS pn ON pn.usr_referido_id = u.idUsuario
    WHERE 
    pn.estado_posicion = 'SELECCIONADO'
    AND TIMESTAMPDIFF(HOUR, u.usuFecRegistro, '{$fechaActual->toDateTimeString()}') > 48
");

        //dd( $resultados );

        if (sizeof($resultados) > 0) {
            foreach ($resultados as $usuario) {
                // Actualizar el estado del usuario a 'Eliminado'
                /*DB::table( 'usuario' )
                ->where( 'idUsuario', $usuario->idUsuario )
                ->update( [ 'estado_idEstado' => 3 ] );*/

                // Actualizar el estado del posicion_nodo_usuinv a 'Inactivo'
                DB::table('posicion_nodo_usuinv')
                    ->where('id', $usuario->id)
                    ->update(['estado_posicion' => 'anulado']);

                // Obtener la información actualizada del usuario
                $usuarioActualizado = DB::table('usuario')
                    ->where('idUsuario', $usuario->idUsuario)
                    ->first();

                // Obtener el correo del patrocinador
                $correoPatrocinador = DB::table('usuario')
                    ->where('idUsuario', $usuarioActualizado->usuPatrocinador)
                    ->value('usuCorreo');

                $destinatario = $correoPatrocinador;
                $asunto = 'Informacion Usuario Surebets24siete';
                $cuerpo = View::make('emails.cancelar_nodo', ['data' => $usuarioActualizado])->render();

                // Enviar correo con adjunto usando CorreoUtil
                CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);
            }
        }/*else{

    $destinatario = 'administracion@surebets24siete.com';
    $asunto = 'Informacion Usuario Surebets24siete';
    $cuerpo = 'Hola';
    // Enviar correo con adjunto usando CorreoUtil
    CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

}*/


        $fecha_actual = date('y-m-d');

        $result = DB::select("
        SELECT *
        FROM usuario AS u
        WHERE 
        u.usuFechaRol != 'NULL' AND
        u.usuFechaRol <= '$fecha_actual'");

        if (sizeof($result) > 0) {
            foreach ($result as $usu) {

                /*$body_rol = View::make('emails.nuevo_rol', ['nuevo_nivel' => $usu->rol_idRol])->render();

                $destinatario = $usu->usuCorreo;
                $asunto = 'Nuevo Nivel';
                CorreoUtil::enviarCorreo($destinatario, $asunto, $body_rol);*/

                DB::table('usuario')
                    ->where('idUsuario', $usu->idUsuario)
                    ->update(['usuFechaRol' => NULL]);
            }
        }

        $this->info('Informacion ejecutada correctamente.');
    }
}