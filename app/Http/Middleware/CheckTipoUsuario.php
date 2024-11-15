<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
class CheckTipoUsuario
{
    public function handle($request, Closure $next, ...$idRol)
    {
        // Obtiene el rol del usuario almacenado en la sesión
        $user = Auth::user();
        //Log::info("User information", ['user' => $user]);
        // Verifica si el usuario está autenticado y si tiene el rol proporcionado en la ruta
        if (!$user || $user->rol_idRol != (int)$idRol[0]) {
            // Si el usuario no está autenticado o no tiene el rol adecuado, aborta la solicitud con un código de estado 403 (Prohibido)
            // abort(403, 'No tiene permiso para acceder a esta página.');
            return new JsonResponse(['error' => 'No tiene permiso para acceder a esta página.'], 403);
        }

        // Si el rol coincide, permite el acceso a la ruta
        return $next($request);
    }
}
