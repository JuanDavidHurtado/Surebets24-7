<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function login(Request $request)
    {
            try {
                    // Obtén el usuario por usuLogin
                    // $user = Usuario::where('usuLogin', $request->usuLogin)->first();
                    // Obtén el usuario y el rol por usuLogin
                    $user = Usuario::join('rol', 'usuario.rol_idRol', '=', 'rol.idRol')
                    ->where('usuario.usuLogin', $request->usuLogin)
                    ->first(['usuario.*', 'rol.*']);

                    if (!$user) {
                        // Usuario no existe
                        return response()->json(['message' => 'Usuario no encontrado'], 404);
                    }

                     // Verificar si el usuario está inactivo
                    if ($user->estado_idEstado == 2) {
                        return response()->json(['message' => 'Usuario inactivo'], 403); // 403 o cualquier otro código de estado apropiado
                    }
                    // Verifica si el usuario existe y si la contraseña coincide
                    if ($user && Hash::check($request->usuClave, $user->usuClave)) {

                        // La autenticación fue exitosa, genera el token
                        $token = $user->createToken('NombreDelToken')->plainTextToken;
                        return response()->json(['token' => $token,'id'=> $user->idUsuario], 200);
                        
                        ;
                        
                    
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
        try {
            // Intenta borrar el token de acceso actual
            $request->user()->currentAccessToken()->delete();
    
            // Respuesta de éxito
            return response()->json(['message' => 'Sesión cerrada con éxito']);
        } catch (\Exception $e) {
            // Registra la excepción en el log
            Log::error('Error al cerrar sesión: ', ['error' => $e->getMessage()]);
    
            // Respuesta de error
            return response()->json(['message' => 'Error al cerrar sesión', 'error' => $e->getMessage()], 500);
        }
    }
    public function resetPassword(Request $request)
{
    try {
        $passwordReset = DB::table('password_resets')->where([
            ['token', $request->token],
            // ['email', $request->email]
        ])->first();
        
        $tokenExpiry = Carbon::parse($passwordReset->created_at)->addHours(24);
        if (!$passwordReset || now()->greaterThan($tokenExpiry)) {
            return response()->json(['message' => 'Token inválido o expirado'], 404);
        }

        $user = Usuario::where('usuCorreo', $passwordReset->email)->first();
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
      
          
        $user->usuClave = Hash::make($request->clave);
        $user->save();

        // Opcional: Eliminar el token de restablecimiento de la base de datos
        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return response()->json(['message' => 'Contraseña actualizada correctamente']);
    } catch (\Exception $e) {
        // Log the error with the error message and request data
        Log::error('Error durante el proceso de restablecer la contraseña', 
            ['error' => $e->getMessage(),
            'request' => $request->all()
            ]);
        return response()->json(['message' => 'Ha ocurrido un error. Por favor, inténtelo de nuevo más tarde'], 500);
    }
}
}
