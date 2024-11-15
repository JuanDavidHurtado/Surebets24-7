<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/trabaja_con_nosotros', function () {
    return view('trabaja_con_nosotros', ['titulo' => 'Surebest | Trabaja con Nosotros']);
})->name('trabaja_con_nosotros');


Route::get('/login', function () {
    return view('auth.login', ['titulo' => 'Surebest | Iniciar Sesion']);
})->name('login');
Route::get('/', function () {
    return view('sports', ['titulo' => 'Surebest | Deportes']);
})->name('sports');
Route::get('/in-play', function () {
    return view('in-play', ['titulo' => 'Surebest | En Juego']);
})->name('in-play');

Route::get('/promotions', function () {
    return view('promotions', ['titulo' => 'Surebest | Servicios']);
})->name('promotions');

Route::get('/statistics', function () {
    return view('statistics', ['titulo' => 'Surebest | Estadisticas']);
})->name('statistics');

Route::get('/results', function () {
    return view('results', ['titulo' => 'Surebest | Resultados']);
})->name('results');

Route::get('/contact-us', function () {
    return view('contact-us', ['titulo' => 'Surebest | Contacto']);
})->name('contact-us');

Route::get('/news', function () {
    return view('news', ['titulo' => 'Surebest | Noticias']);
})->name('news');

Route::get('/privacy-policy', function () {
    return view('privacy-policy', ['titulo' => 'Surebest | Politica de Privacidad']);
})->name('privacy-policy');

Route::get('/blog-post', function () {
    return view('blog-post', ['titulo' => 'Surebest | Entrada en el Blog']);
})->name('blog-post');


Route::get('/gallery', function () {
    return view('gallery', ['titulo' => 'Surebest | Galeria']);
})->name('gallery');


Route::get('/team-overview', function () {
    return view('team-overview', ['titulo' => 'Surebest | Descripción del Equipo']);
})->name('team-overview');


Route::get('/schedule', function () {
    return view('schedule', ['titulo' => 'Surebest | Cronograma']);
})->name('schedule');

Route::get('/latest-game-results', function () {
    return view('latest-game-results', ['titulo' => 'Surebest | Ultimos Resultados']);
})->name('latest-game-results');

Route::get('/standings', function () {
    return view('standings', ['titulo' => 'Surebest | Clasificacion']);
})->name('standings');


Route::get('/welcome', function () {
    return view('welcome', ['titulo' => 'Surebest | Bienvenido']);
})->name('welcome');

Route::get('/welcome2', function () {
    return view('welcome2', ['titulo' => 'Surebest | Bienvenido']);
})->name('welcome2');

Route::get('/join', function () {
    return view('join', ['titulo' => 'Surebest | Unete Hoy Mismo']);
})->name('join');

Route::get('/bots', function () {
    return view('bots', ['titulo' => 'Surebest | Bots Automatizados']);
})->name('bots');



Route::get('/plan', function () {
    return view('plan', ['titulo' => 'Surebest | Plan']);
})->name('plan');
Route::get('/contact', function () {
    return view('contact', ['titulo' => 'Surebest | Contacto']);
})->name('contact');
Route::get('/subscribe', function () {
    return view('subscribe', ['titulo' => 'Surebest | Suscribirse']);
})->name('subscribe');

Route::get('/reset-password/{token}', function ($token) {
    // Pasar el token a la vista
    return view('auth.recuperar_password.VRecuperarPassword', ['token' => $token, 'titulo' => 'Surebest | Recuperar Contraseña']);
})->name('password.reset');
/*Route::get('/enviar_correo', function () {
    return view('auth.recuperar_password.VEnviarCorreo', ['titulo' => 'Surebest | Recuperar Contraseña']);
})->name('enviar_correo');*/

Route::get('/registro', function () {
    return view('auth/register', ['titulo' => 'Surebest | Registro']);
})->name('register');
Route::get('/deportes', function () {
    return view('deportes', ['titulo' => 'Surebest | Deportes']);
})->name('deportes');

Route::get('/estadisticas', function () {
    return view('estadisticas', ['titulo' => 'Surebest | Estadisticas']);
})->name('estadisticas');

Route::get('/portal_academico', function () {
    return view('academia', ['titulo' => 'Surebest | Curso']);
})->name('portal_academico');

//cursos
Route::prefix('curso')->group(function () {
    Route::get('/agregar', function () {
        return view('VCursos.VAgregar', ['titulo' => 'Surebest | Curso']);
    })->name('form_agregar_curso');

    Route::get('/lista', function () {
        return view('VCursos.VListar', ['titulo' => 'Surebest | Curso']);
    })->name('listar_curso');

    Route::get('/contenido/detalles/{cursoId}', function ($id) {
        return view('VCursos.VContenido.VDetalle', ['curso_id' => $id, 'titulo' => 'Surebest | Contenido']);
    })->name('curso_detalle_contenido');

    Route::get('/contenido/material/{id}', function ($id) {
        return view('VCursos.VContenidoMaterial.VListar', ['contenido_id' => $id, 'titulo' => 'Surebest | Material']);
    })->name('curso_contenido_material');
});

//referidos 
Route::prefix('referido')->group(function () {
    Route::get('/agregar', function () {
        return view('VReferido.VAgregar', ['titulo' => 'Surebest | Referido']);
    })->name('agregar_referido');

    //Lista Referido
    Route::get('/lista_referido', function () {
        return view('VReferido.VListar', ['titulo' => 'Surebest | Referido']);
    })->name('form_lista_referido');
});

//productos
Route::prefix('producto')->group(function () {
    Route::get('/listar', function () {
        return view('VProductos.VListar', ['titulo' => 'Surebest | Producto']);
    })->name('listar_producto');
    Route::get('/agregar', function () {
        return view('VProductos.VAgregar', ['titulo' => 'Surebest | Producto']);
    })->name('form_agregar_producto');

    Route::get('/actualizar', function () {
        return view('VProductos.VActualizar', ['titulo' => 'Surebest | Producto']);
    })->name('form_actualizar_producto');
});

//Lista Comision
Route::view('/lista_comision', 'VComision.VListar', ['titulo' => 'Surebest | Comision'])->name('form_lista_comision');
Route::view('/lis_comi_cur', 'VComision.VListarCurso', ['titulo' => 'Surebest | Comision'])->name('lis_comi_cur');
Route::view('/lista_comision_binario', 'VComision.VListarArbol', ['titulo' => 'Surebest | Comision'])->name('lista_comision_binario');
Route::view('/lista_comision_bot', 'VComision.VListarBot', ['titulo' => 'Surebest | Comision'])->name('lista_comision_bot');

// Inversion x usuario
Route::view('/lista_inversion', 'VInversion.VListar', ['titulo' => 'Surebest | Inversion'])->name('form_lista_inversion');
Route::view('/seleccion_inversion_view/{id}', 'VInversion.VDatos', ['titulo' => 'Surebest | Lista'])->name('seleccion_inversion_view');

//Bots x Usuario
Route::view('/lista_bots', 'VBotsUsu.VListar', ['titulo' => 'Surebest | Bots'])->name('form_lista_bots');
Route::view('/seleccion_bots_view/{id}', 'VBotsUsu.VDatos', ['titulo' => 'Surebest | Datos'])->name('seleccion_bots_view');

// Curso x usuario
Route::view('/lista_curso', 'VCursoUsu.VListar', ['titulo' => 'Surebest | Cursos'])->name('form_lista_curso');
Route::view('/seleccion_curso_view/{id}', 'VCursoUsu.VDatos', ['titulo' => 'Surebest | Datos'])->name('seleccion_curso_view');

// Historial curso_usuario
Route::view('/historial_curso', 'VCursoUsu.VHistorial', ['titulo' => 'Surebest | Historial'])->name('historial_curso');

// Historial inversion_usuario
Route::view('/historial_inversion', 'VInversion.VHistorial', ['titulo' => 'Surebest | Historial'])->name('historial_inversion');

// Historial bot_usuario
Route::view('/historial_bot', 'VBotsUsu.VHistorial', ['titulo' => 'Surebest | Historial'])->name('historial_bot');


//Anticipo inversion 
Route::view('/adelanto_inversion/{id}', 'VInversion.VAnticipo', ['titulo' => 'Surebest | Anticipo'])->name('adelanto_inversion');

//Metodo de Pago
Route::view('/metodo_pago', 'VMetodo.VListar', ['titulo' => 'Surebest | Pago'])->name('metodo_pago');

//Metodo de Pago
Route::view('/perfil', 'VUsuario.VPerfil', ['titulo' => 'Surebest | Perfil'])->name('perfil');

//Home
Route::view('/home', 'VHome.VHome', ['titulo' => 'Surebest | Home'])->name('home_dashboard');

//Pendiente curso
Route::view('/pendiente_curso', 'VPendiente.VListarCur', ['titulo' => 'Surebest | Curso'])->name('form_pendiente_curso');

//Pendiente Inversion
Route::view('/pendiente_inversion', 'VPendiente.VListarInv', ['titulo' => 'Surebest | Inversion'])->name('form_pendiente_inversion');

//Pendiente Comision
Route::view('/lista_comision_finalizar', 'VPendiente.VListaComInv', ['titulo' => 'Surebest | Comision Inversion'])->name('lista_comision_finalizar');
Route::view('/lista_comision_curso', 'VPendiente.VListaComCur', ['titulo' => 'Surebest | Comision Curso'])->name('form_lista_comision_curso');
Route::view('/lista_comision_arbol', 'VPendiente.VListaComArb', ['titulo' => 'Surebest | Comision Arbol'])->name('lista_comision_arbol');
Route::view('/form_lista_comision_bot', 'VPendiente.VListaComBot', ['titulo' => 'Surebest | Comision Bot'])->name('form_lista_comision_bot');


//Lista Inversiones Administracion
Route::view('/lista_inversion_finalizar', 'VAdministracion.VListarInvF', ['titulo' => 'Surebest | Inversion'])->name('lista_inversion_finalizar');

//Pendiente Inversion
Route::view('/lista_usuario', 'VAdministracion.VListarUsu', ['titulo' => 'Surebest | Inversion'])->name('lista_usuario');

// historial material
Route::view('/historial_material/{id}', 'VCursoUsu.VMaterial', ['titulo' => 'Surebest | Material'])->name('historial_material');

//Historial punto
Route::view('/historial_punto', 'VPunto.VHistorial', ['titulo' => 'Surebest | Historial'])->name('historial_punto');

//Pendiente Adelanto
Route::view('/pendiente_adelanto', 'VPendiente.VListarAde', ['titulo' => 'Surebest | Adelanto'])->name('form_pendiente_adelanto');

//Pendiente Bot
Route::view('/pendiente_bot', 'VPendiente.VListaBot', ['titulo' => 'Surebest | Bots'])->name('form_pendiente_bot');


//Mi arbol

Route::view('/ver_arbol', 'VReferido.VArbol', ['titulo' => 'Surebest | Mi Arbol'])->name('ver_arbol');

//Saldo
Route::view('/girar_saldo', 'VSaldo.VGirar', ['titulo' => 'Surebest | Girar Saldo'])->name('girar_saldo');
Route::view('/historial_saldo', 'VSaldo.VHistorial', ['titulo' => 'Surebest | Historial'])->name('historial_saldo');
Route::view('/historial_ad', 'VSaldo.VHistorialAd', ['titulo' => 'Surebest | Historial'])->name('historial_ad');


