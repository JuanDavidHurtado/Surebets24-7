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


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/plan', function () {
    return view('plan');
})->name('plan');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/subscribe', function () {
    return view('subscribe');
})->name('subscribe');

Route::get('/registro', function () {
    return view('auth/register');
})->name('register');

// Cursos
Route::get('/dashboard_index', function () {
    return view('VCursos/VListar');
})->name('dashboard_index');


//cursos
Route::prefix('curso')->group(function () {
    Route::get('/agregar', function () {
        return view('VCursos.VAgregar');
    })->name('agregar_curso');

    Route::get('/lista', function () {
        return view('VCursos.VListar');
    })->name('listar_curso');

    Route::get('/contenido/agregar/{id}', function ($id) {
        return view('VCursos.VContenido.VAgregar', ['curso_id' => $id]);
    })->name('curso_contenido_agregar');

    Route::get('/contenido/material/{id}', function($id){
        return view('VCursos.VContenidoMaterial.VListar', ['contenido_id' => $id]);
    })->name('curso_contenido_material');
 
});


//referidos 
Route::prefix('referido')->group(function () {
    Route::get('/agregar', function () {
        return view('VReferido.VAgregar');
    })->name('agregar_referido');

    //Lista Referido
    Route::get('/lista_referido', function(){
        return view('VReferido.VListar');
    } )->name('lista_referido');
});

//productos
Route::prefix('producto')->group(function () {
    Route::get('/listar', function () {
        return view('VProductos.VListar');
    })->name('listar_producto');
    Route::get('/agregar', function () {
        return view('VProductos.VAgregar');
    })->name('agregar_producto');
});





//Lista Referido
Route::view('/lista_comision', 'VComision.VListar')->name('lista_comision');

// Inversion x usuario
Route::view('/lista_inversion', 'VInversion.VListar')->name('lista_inversion');
Route::view('/seleccion_inversion_view/{id}', 'VInversion.VDatos')->name('seleccion_inversion_view');

// Curso x usuario
Route::view('/lista_curso', 'VCursoUsu.VListar')->name('lista_curso');
Route::view('/seleccion_curso_view/{id}', 'VCursoUsu.VDatos')->name('seleccion_curso_view');

// Historial curso_usuario
Route::view('/historial_curso', 'VCursoUsu.VHistorial')->name('historial_curso');

// Historial inversion_usuario
Route::view('/historial_inversion', 'VInversion.VHistorial')->name('historial_inversion');

//Metodo de Pago
Route::view('/metodo_pago', 'VMetodo.VListar')->name('metodo_pago');

//Metodo de Pago
Route::view('/perfil', 'VUsuario.VPerfil')->name('perfil');

//Home
Route::view('/home', 'VHome.VHome')->name('home');

//Pendiente curso
Route::view('/pendiente_curso', 'VPendiente.VListarCur')->name('pendiente_curso');

//Pendiente Inversion
Route::view('/pendiente_inversion', 'VPendiente.VListarInv')->name('pendiente_inversion');

//Pendiente Comision
Route::view('/lista_comision_finalizar', 'VPendiente.VListaCom')->name('lista_comision_finalizar');

//Lista Inversiones Administracion
Route::view('/lista_inversion_finalizar', 'VAdministracion.VListarInvF')->name('lista_inversion_finalizar');

//Pendiente Inversion
Route::view('/lista_usuario', 'VAdministracion.VListarUsu')->name('lista_usuario');


