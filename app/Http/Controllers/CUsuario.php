<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use App\Utilities\CorreoUtil;

use App\Services\NodoService;
use App\Services\InversionService;
use App\Models\PosicionNodoUsuInv;

class CUsuario extends Controller
{
    protected $nodoService;
    protected $inversionService;

    public function __construct(NodoService $nodoService, InversionService $inversionService)
    {
        $this->nodoService = $nodoService;
        $this->inversionService = $inversionService;
    }

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

            $documento = $request->input('documento');
            $nombre = $request->input('nombre');
            $apellido = $request->input('apellido');
            $correo = $request->input('correo');
            $telefono = $request->input('telefono');
            $direccion = $request->input('direccion');
            $posicion_disponible = $request->input('posicion_disponible');
            $login = $request->input('login');
            $clave = Hash::make($request->input('clave'));

            $usuarioExistente = DB::table('usuario')
                ->where('usuCorreo', $correo)
                ->orWhere('usuLogin', $login)
                ->exists();

            if ($usuarioExistente) {
                return response()->json(['status' => '201', 'message' => 'El correo o el login de usuario ya existe en la base de datos, por favor verifique']);
            }

            if ($patrocinador !== NULL) {
                $data = $this->inversionService->get_inv_x_usuarioId($patrocinador);
                if ($data !== 'NothasData') {
                    $usuarioId = DB::table('usuario')->insertGetId([
                        'usuPatrocinador' => $patrocinador,
                        'usuFecRegistro' => date('Y-m-d H:i:s'),
                        'usuCodigo' => $codigo,
                        'usuDocumento' => $documento,
                        'usuNombre' => $nombre,
                        'usuApellido' => $apellido,
                        'usuCorreo' => $correo,
                        'usuTelefono' => $telefono,
                        'usuDireccion' => $direccion,
                        'usuLogin' => $login,
                        'usuClave' => $clave,
                        'rol_idRol' => 2,
                        'estado_idEstado' => 1
                    ]);

                    // Renderiza la vista a una cadena de texto
                    $cuerpo = View::make('emails.bienvenida', ['correo' => $correo])->render();
                    $destinatario = $correo;
                    $asunto = 'Bienvenid@ Usuario Surebets';
                    CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

                    if (isset($posicion_disponible)) {
                        // Determinación del tipo de nodo para el nuevo usuario
                        $array_posicion_disponible = explode(':', $posicion_disponible);
                        $posicion = $array_posicion_disponible[1];
                        $nivel = $array_posicion_disponible[0];
                        $userPadre = $array_posicion_disponible[2];
                        // es el id usuInversion

                        if (empty($posicion) && empty($nivel)) {
                            $posicion = null;
                            $nivel = 0;
                        }

                        // Determinar el tipo de nodo del nuevo usuario
                        $tipoNodo = $this->nodoService->determinarTipoNodoNuevoUsuario($posicion, $nivel);

                        $posicionSeleccionada = [
                            'posicion' => $posicion,
                            'nivel' => $nivel,
                            'userPadre' => $userPadre,
                            'tipoNodo' => $tipoNodo,
                            'usuarioId' => $usuarioId

                        ];

                        $seleccionarNodo = $this->nodoService->seleccionarPosicionNodo($posicionSeleccionada);
                    }
                    //return response()->json( [ 'message' => 'Usuario agregado con éxito' ], 201 );
                    return response()->json(['status' => '200', 'message' => 'Usuario agregado con éxito']);

                } else {
                    //return response()->json( [ 'alertMsj' => 'No registra inversion en proceso, error al crear usuario referido' ], 201 );
                    return response()->json(['status' => '201', 'message' => 'Tu usuario no registra una inversion activa, en este momento no se puede crear el usuario.']);

                }
            }
        } catch (\Exception $e) {
            Log::error('Error al agregar usuario', [
                'error' => $e->getMessage(),
                'request' => $request->all()  // Incluir la información del request para depuración
            ]);
            //return response()->json( [ 'message' => 'Error al agregar el usuario: ' . $e->getMessage() ], 500 );
            return response()->json(['status' => '501', 'message' => 'Error al agregar el usuario: ' . $e->getMessage()]);
        }
    }

    public function perfil($id)
    {

        $sql = "
        SELECT u.*, r.*, i.imgArchivo
        FROM usuario AS u
        INNER JOIN rol AS r ON r.idRol = u.rol_idRol
        LEFT JOIN imagen AS i ON i.usuario_idUsuario = u.idUsuario
        WHERE u.idUsuario = '$id'
    ";
        $data = DB::select($sql);

        if (count($data) > 0) {
            $usuario = $data[0];

            // Verifica si hay datos binarios de la imagen
            if (!is_null($usuario->imgArchivo)) {
                $usuario->imgArchivo = base64_encode($usuario->imgArchivo);
            }

            return response()->json([
                'status' => 200,
                'message' => 'Datos obtenidos con éxito',
                'usuario' => $usuario,
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Usuario no encontrado',
            ], 404);
        }
    }

    public function actualizar_datos(Request $request)
    {
        try {
            $id_usu = $request->input('idUsu');
            $documento = $request->input('documento');
            $nombre = $request->input('nombre');
            $apellido = $request->input('apellido');
            $correo = $request->input('correo');
            $telefono = $request->input('telefono');
            $direccion = $request->input('direccion');
            $login = $request->input('login');

            DB::table('usuario')
                ->where('idUsuario', $id_usu)
                ->update([
                    'usuDocumento' => $documento,
                    'usuNombre' => $nombre,
                    'usuApellido' => $apellido,
                    'usuCorreo' => $correo,
                    'usuTelefono' => $telefono,
                    'usuDireccion' => $direccion,
                    'usuLogin' => $login,
                ]);

            return response()->json(['status' => 200, 'message' => 'Datos de usuario actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar los datos de usuario: ' . $e->getMessage()], 500);
        }
    }

    public function actualizar_contrasena(Request $request)
    {
        try {
            $id_usu = $request->input('id_usu');
            $pwd = Hash::make($request->input('clave'));

            DB::table('usuario')
                ->where('idUsuario', $id_usu)
                ->update([
                    'usuClave' => $pwd,
                ]);

            return response()->json(['status' => 200, 'message' => 'Contraseña de usuario actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            return response()->json(['status' => 500, 'message' => 'Error al actualizar la contraseña de usuario: ' . $e->getMessage()], 500);
        }
    }

    public function actualizar_imagen(Request $request)
    {
        try {
            $id_usu = $request->input('id_usu');

            // Iniciar la transacción
            DB::beginTransaction();

            // Verificar si ya existe un registro con el mismo usuario_idUsuario
            $existingRecord = DB::select('SELECT * FROM imagen WHERE usuario_idUsuario = ?', [$id_usu]);

            if (!empty($existingRecord)) {
                // Si existe un registro, elimínalo
                DB::delete('DELETE FROM imagen WHERE usuario_idUsuario = ?', [$id_usu]);
            }

            $file = $request->file('imagen');
            $binario = file_get_contents($file);

            // Inserta el nuevo registro de imagen
            DB::insert(
                'INSERT INTO imagen (imgArchivo, usuario_idUsuario) VALUES (?,?)',
                [$binario, $id_usu]
            );

            // Confirmar la transacción
            DB::commit();

            return response()->json(['status' => 200, 'message' => 'Imagen de usuario actualizado con éxito'], 200);
        } catch (QueryException $e) {
            // En caso de error, puedes manejar la excepción aquí
            DB::rollBack();
            // Revertir la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al actualizar la imagen de usuario: ' . $e->getMessage()], 500);
        }
    }

    public function obtener_usuario($id)
    {
        try {

            // Registrar todo el objeto request
            $user = Usuario::leftJoin('rol', 'usuario.rol_idRol', '=', 'rol.idRol')
                ->leftJoin('imagen', 'usuario.idUsuario', '=', 'imagen.usuario_idUsuario')
                ->where('usuario.idUsuario', $id)
                ->first(['usuario.*', 'rol.*', 'imagen.imgArchivo']);

            if ($user && !is_null($user->imgArchivo)) {
                // Si hay una imagen, convertirla a base64
                $user->imgArchivo = base64_encode($user->imgArchivo);
            } else if ($user) {
                // Si no hay imagen, establecer imgArchivo como null o un valor predeterminado
                $user->imgArchivo = null;
            }
            return response()->json(['status' => 200, 'message' => 'Datos obtenidos con éxito', 'usuario' => $user], 200);
        } catch (\Exception $e) {

            return response()->json(['status' => 500, 'message' => 'Error al obtener los datos del usuario: ' . $e->getMessage()], 500);
        }
    }

    public function sendResetLinkEmail(Request $request)
    {
        try {
            $user = Usuario::where('usuCorreo', $request->email)->first();

            if (!$user) {
                return response()->json(['message' => 'Correo no encontrado'], 404);
            }

            $token = Str::random(60);
            $url = url('/reset-password/' . $token);

            DB::table('password_resets')->insert([
                'email' => $user->usuCorreo,
                'token' => $token,
                'created_at' => now()
            ]);

            // Renderiza la vista a una cadena de texto
            $cuerpo = View::make('emails.passwordReset', ['url' => $url])->render();
            $destinatario = $user->usuCorreo;
            $asunto = 'Restablecimiento contraseña';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            return response()->json(['message' => 'Hemos enviado por correo electrónico el enlace para restablecer la contraseña']);
        } catch (\Exception $e) {
            Log::error('Error durante el proceso de envío de correo electrónico para restablecer la contraseña', [
                'error' => $e->getMessage(),
                'request' => $request->all()
            ]);
            return response()->json(['message' => 'Error en el servidor', 'error' => $e->getMessage()], 500);
        }
    }

    public function punto_usuario($id)
    {
        try {
            $data = DB::table('historial_punto as hp')
                ->where('hp.usuario_idUsuario', $id)
                ->select('*')
                ->paginate(10);

            return response()->json($data);
        } catch (\Exception $e) {
            // Manejar la excepción
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function reasignar_nodo(Request $request)
    {
        try {

            // Iniciar la transacción
            DB::beginTransaction();

            $posicion_disponible = $request->input('posicion_disponible');
            $usr_referido = base64_decode($request->input('usr_referido'));
            //dd( $usr_referido );

            // Determinación del tipo de nodo para el nuevo usuario
            $array_posicion_disponible = explode(':', $posicion_disponible);
            $posicion = $array_posicion_disponible[1];
            $nivel = $array_posicion_disponible[0];
            $userPadre = $array_posicion_disponible[2];
            // es el id usuInversion

            if (empty($posicion) && empty($nivel)) {
                $posicion = null;
                $nivel = 0;
            }

            // Determinar el tipo de nodo del nuevo usuario
            $tipoNodo = $this->nodoService->determinarTipoNodoNuevoUsuario($posicion, $nivel);

            $posicionSeleccionada = [
                'posicion' => $posicion,
                'nivel' => $nivel,
                'userPadre' => $userPadre,
                'tipoNodo' => $tipoNodo,
                'usuarioId' => $usr_referido

            ];

            //$seleccionarNodo = $this->nodoService->seleccionarPosicionNodoReasignar($posicionSeleccionada);
            $seleccionarNodo = $this->nodoService->seleccionarPosicionNodoReasignar($posicionSeleccionada);


            DB::table('usuario')
                ->where('idUsuario', $usr_referido)
                ->update([
                    'usuFecRegistro' => date('Y-m-d-H-i-s'),
                ]);

            $usuario = DB::table('usuario')
                ->where('idUsuario', $usr_referido)
                ->first();

            // Renderiza la vista a una cadena de texto
            $cuerpo = View::make('emails.reasignar_nodo', ['nombre' => $usuario->usuNombre . ' ' . $usuario->usuApellido])->render();
            $destinatario = $usuario->usuCorreo;
            $asunto = 'Asigancion Nodo Surebets';
            CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo);

            // Confirmar la transacción
            DB::commit();

            return response()->json(['status' => 200, 'message' => 'Nodo asignado exitosamente'], 200);

        } catch (\Exception $e) {

            // En caso de error, puedes manejar la excepción aquí
            DB::rollBack();

            return response()->json(['status' => 500, 'message' => 'Error al asignar el nodo: ' . $e->getMessage()], 500);

        }
    }

    public function ponerse_contacto(Request $request)
    {
        try {
            // Captura los datos del request
            $nombre = $request->input('nombre');
            $telefono = $request->input('telefono');
            $mensaje = $request->input('mensaje');
            $correo = $request->input('correo');

            // Organiza los datos en un arreglo
            $data = [
                'nombre' => $nombre,
                'telefono' => $telefono,
                'mensaje' => $mensaje,
                'correo' => $correo
            ];

            // Renderiza la vista a una cadena de texto
            $cuerpo = View::make('emails.ponerse_contaco', ['data' => $data])->render();
            $destinatario = 'administracion@surebets24siete.com';
            $asunto = 'Solicitud Información Cliente';

            // Envía el correo y valida si se envió correctamente
            if (CorreoUtil::enviarCorreo($destinatario, $asunto, $cuerpo)) {
                return response()->json([
                    'message' => '
                    Hemos enviado tu información de contacto, 
                    pronto un asesor de surebets se pondra en contacto contigo.',
                    'status' => 200
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'No se pudo enviar el correo, por favor intenta nuevamente.'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Error en el servidor, intentelo nuevamente.',
                'error' => $e->getMessage()
            ]);
        }
    }

}
