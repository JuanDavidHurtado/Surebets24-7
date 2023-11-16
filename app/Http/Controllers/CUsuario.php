<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\NewAccessToken;

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
            Log::error('Error al agregar usuario', [
                'error' => $e->getMessage(),
                'request' => $request->all()  // Incluir la información del request para depuración
            ]);
            return response()->json(['message' => 'Error al agregar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function perfil()
    {
        $id = 1; 
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
            $id_usu = 1;
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
            $id_usu = 1;
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
            $id_usu = 1;

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
            DB::rollBack(); // Revertir la transacción en caso de error
            return response()->json(['status' => 500, 'message' => 'Error al actualizar la imagen de usuario: ' . $e->getMessage()], 500);
        }
    }


    public function login(Request $request)
        {
            try {
                    // Obtén el usuario por usuLogin
                    // $user = Usuario::where('usuLogin', $request->usuLogin)->first();
                    // Obtén el usuario y el rol por usuLogin
                    $user = Usuario::join('rol', 'usuario.rol_idRol', '=', 'rol.idRol')
                    ->where('usuario.usuLogin', $request->usuLogin)
                    ->first(['usuario.*', 'rol.rolNombre as rolNombre']);

                    if (!$user) {
                        // Usuario no existe
                        return response()->json(['message' => 'Usuario no encontrado'], 404);
                    }
                    // Verifica si el usuario existe y si la contraseña coincide
                    if ($user && Hash::check($request->usuClave, $user->usuClave)) {
                        // La autenticación fue exitosa, genera el token
                        $token = $user->createToken('NombreDelToken')->plainTextToken;
                        return response()->json(['token' => $token, 'rol' => $user->rolNombre,'idUsuario'=> $user->idUsuario], 200);
                    } else {
                        // Autenticación fallida
                        return response()->json(['message' => 'Credenciales no válidas'], 401);
                    }
            } catch (\Exception $e) {
                Log::error('Error durante el proceso de login', ['error' => $e->getMessage()]);
                return response()->json(['message' => 'Error en el servidor', 'error' => $e->getMessage()], 500);
            }
        }

    
    
        public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Sesión cerrada con éxito']);
    }
}

