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
    return view('trabaja_con_nosotros',['titulo' => 'Surebest | Trabaja con Nosotros']);
})->name('trabaja_con_nosotros');


Route::get('/login', function () {
    return view('auth.login',['titulo' => 'Surebest | Login']);
})->name('login');
Route::get('/', function () {
    return view('about', ['titulo' => 'Surebest | Home']);
})->name('about');
Route::get('/plan', function () {
    return view('plan', ['titulo' => 'Surebest | Plan']);
})->name('plan');
Route::get('/contact', function () {
    return view('contact',['titulo' => 'Surebest | Contacto']);
})->name('contact');
Route::get('/subscribe', function () {
    return view('subscribe',['titulo' => 'Surebest | Suscribirse']);
})->name('subscribe');

Route::get('/reset-password/{token}', function ($token) {
    // Pasar el token a la vista
    return view('auth.recuperar_password.VRecuperarPassword', ['token' => $token]);
})->name('password.reset');
Route::get('/enviar_correo', function () {
    return view('auth.recuperar_password.VEnviarCorreo', ['titulo' => 'Surebest | Recuperar Contraseña']);
})->name('enviar_correo');

Route::get('/registro', function () {
    return view('auth/register',['titulo' => 'Surebest | Registro']);
})->name('register');
Route::get('/deportes', function () {
    return view('deportes',['titulo' => 'Surebest | Deportes']);
})->name('deportes');

Route::get('/estadisticas', function () {
    return view('estadisticas',['titulo' => 'Surebest | Estadisticas']);
})->name('estadisticas');

Route::get('/portal_academico', function () {
    return view('academia',['titulo' => 'Surebest | Curso']);
})->name('portal_academico');

//cursos
Route::prefix('curso')->group(function () {
    Route::get('/agregar', function () {
        return view('VCursos.VAgregar',['titulo' => 'Surebest | Curso']);
    })->name('agregar_curso');

    Route::get('/lista', function () {
        return view('VCursos.VListar',['titulo' => 'Surebest | Curso']);
    })->name('listar_curso');

    Route::get('/contenido/detalles/{cursoId}', function ($id) {
        return view('VCursos.VContenido.VDetalle', ['curso_id' => $id,'titulo' => 'Surebest | Contenido']);
    })->name('curso_detalle_contenido');

    Route::get('/contenido/material/{id}', function($id){
        return view('VCursos.VContenidoMaterial.VListar', ['contenido_id' => $id,'titulo' => 'Surebest | Material']);
    })->name('curso_contenido_material');
 
});


//referidos 
Route::prefix('referido')->group(function () {
    Route::get('/agregar', function () {
        return view('VReferido.VAgregar',['titulo' => 'Surebest | Referido']);
    })->name('agregar_referido');

    //Lista Referido
    Route::get('/lista_referido', function(){
        return view('VReferido.VListar',['titulo' => 'Surebest | Referido']);
    } )->name('lista_referido');
});

//productos
Route::prefix('producto')->group(function () {
    Route::get('/listar', function () {
        return view('VProductos.VListar',['titulo' => 'Surebest | Producto']);
    })->name('listar_producto');
    Route::get('/agregar', function () {
        return view('VProductos.VAgregar',['titulo' => 'Surebest | Producto']);
    })->name('agregar_producto');
});





//Lista Referido
Route::view('/lista_comision', 'VComision.VListar',['titulo' => 'Surebest | Comision'])->name('lista_comision');

// Inversion x usuario
Route::view('/lista_inversion', 'VInversion.VListar',['titulo' => 'Surebest | Inversion'])->name('lista_inversion');
Route::view('/seleccion_inversion_view/{id}', 'VInversion.VDatos',['titulo' => 'Surebest | Lista'])->name('seleccion_inversion_view');

// Curso x usuario
Route::view('/lista_curso', 'VCursoUsu.VListar',['titulo' => 'Surebest | Cursos'])->name('lista_curso');
Route::view('/seleccion_curso_view/{id}', 'VCursoUsu.VDatos',['titulo' => 'Surebest | Datos'])->name('seleccion_curso_view');

// Historial curso_usuario
Route::view('/historial_curso', 'VCursoUsu.VHistorial',['titulo' => 'Surebest | Historial'])->name('historial_curso');

// Historial inversion_usuario
Route::view('/historial_inversion', 'VInversion.VHistorial',['titulo' => 'Surebest | Historial'])->name('historial_inversion');

//Metodo de Pago
Route::view('/metodo_pago', 'VMetodo.VListar',['titulo' => 'Surebest | Pago'])->name('metodo_pago');

//Metodo de Pago
Route::view('/perfil', 'VUsuario.VPerfil',['titulo' => 'Surebest | Perfil'])->name('perfil');



//Home
Route::view('/home', 'VHome.VHome', ['titulo' => 'Surebest | Home'])->name('home_dashboard');

//Pendiente curso
Route::view('/pendiente_curso', 'VPendiente.VListarCur',['titulo'=> 'Surebest | Curso'])->name('pendiente_curso');

//Pendiente Inversion
Route::view('/pendiente_inversion', 'VPendiente.VListarInv',['titulo'=> 'Surebest | Inversion'])->name('pendiente_inversion');

//Pendiente Comision
Route::view('/lista_comision_finalizar', 'VPendiente.VListaCom',['titulo'=> 'Surebest | Comision'])->name('lista_comision_finalizar');
Route::view('/lista_comision_especial', 'VPendiente.VListaComEsp',['titulo'=> 'Surebest | Comision Esp.'])->name('lista_comision_especial');


//Lista Inversiones Administracion
Route::view('/lista_inversion_finalizar', 'VAdministracion.VListarInvF',['titulo'=> 'Surebest | Inversion'])->name('lista_inversion_finalizar');

//Pendiente Inversion
Route::view('/lista_usuario', 'VAdministracion.VListarUsu',['titulo'=> 'Surebest | Inversion'])->name('lista_usuario');

// historial material
Route::view('/historial_material/{id}', 'VCursoUsu.VMaterial',['titulo'=> 'Surebest | Material'])->name('historial_material');


