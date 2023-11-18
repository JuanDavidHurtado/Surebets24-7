<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CReferido;
use App\Http\Controllers\CProducto;
use App\Http\Controllers\CCurso;
use App\Http\Controllers\CContenido;
use App\Http\Controllers\CInversion;
use App\Http\Controllers\CCursousuario;
use App\Http\Controllers\CUsuario;
use App\Http\Controllers\CAdministracion;
use App\Http\Controllers\CMetodo;
use App\Http\Controllers\CComision;
use App\Http\Controllers\CPerfil;
use App\Http\Controllers\CContenidoMaterial;














/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas publicas 


Route::post('/registro_usuario', [CUsuario::class, 'registro'])->name('registro_usuario');
Route::post('/login', [CUsuario::class, 'login'])->name('login');



Route::middleware('auth:sanctum')->group(function () {

    //Curso(Parametrizacion)
    Route::get('/lista_curso', [CCurso::class, 'listar'])->name('lista_curso');
    Route::post('/agregar_curso', [CCurso::class, 'agregar'])->name('agregar_curso');
    Route::post('/actualizar_curso', [CCurso::class, 'estado'])->name('actualizar_curso');

    //Contenido(Parametrizacion)
    Route::get('/lista_contenido/{id}', [CContenido::class, 'listar'])->name('lista_contenido');
    Route::post('/agregar_contenido', [CContenido::class, 'agregar'])->name('agregar_contenido');

    //Material Contenido(parametrizacion)
    Route::post('/agregar_material', [CContenidoMaterial::class, 'agregar'])->name('agregar_material');
    Route::get('/lista_material/{id}', [CContenidoMaterial::class, 'listar'])->name('lista_material');

    //Inversiones(Parametrizacion)
    Route::get('/lista_producto', [CProducto::class, 'listar'])->name('lista_producto');
    Route::post('/agregar_producto', [CProducto::class, 'agregar'])->name('agregar_producto');
    Route::put('/actualizar_producto', [CProducto::class, 'estado'])->name('actualizar_producto');

    //Pendiente y Administracion
    Route::get('/pendiente_curso', [CAdministracion::class, 'listar_curso'])->name('pendiente_curso');
    Route::get('/pendiente_inversion', [CAdministracion::class, 'listar_inversion'])->name('pendiente_inversion');
    Route::get('/pendiente_comision', [CAdministracion::class, 'listar_comision'])->name('pendiente_comision');
    Route::get('/lis_usu', [CAdministracion::class, 'listar_usuario'])->name('lis_usu');
    Route::get('/lis_inv', [CAdministracion::class, 'listar_inversion_actual'])->name('lis_inv');
    Route::put('/est_inv', [CAdministracion::class, 'estado_inversion'])->name('est_inv');
    Route::put('/est_cur', [CAdministracion::class, 'estado_curso'])->name('est_cur');
    Route::put('/est_usu', [CAdministracion::class, 'estado_usuario'])->name('est_usu');
    Route::put('/est_com', [CAdministracion::class, 'estado_comision'])->name('est_com');



    //Usuario Inversion
    Route::get('/lista_inversion', [CInversion::class, 'listar'])->name('lista_inversion');
    Route::get('/seleccion/{id}', [CInversion::class, 'seleccion_plan'])->name('seleccion_inversion');
    Route::post('/agregar_inversion', [CInversion::class, 'agregar'])->name('agregar_inversion');
    Route::get('/pro_usu', [CInversion::class, 'producto_usuario'])->name('pro_usu');



    //Usuario curso
    Route::get('/lista_curso_usuario', [CCursousuario::class, 'listar'])->name('lista_curso_usuario');
    Route::get('/seleccion_curso/{id}', [CCursousuario::class, 'seleccion_curso'])->name('seleccion_curso');
    Route::get('/cur_usu', [CCursousuario::class, 'curso_usuario'])->name('cur_usu');
    Route::post('/agregar_curso_usuario', [CCursousuario::class, 'agregar'])->name('agregar_curso_usuario');


    //Referido
    Route::get('/lista_referido/{id}', [CReferido::class, 'listar'])->name('lista_referido');
    Route::post('/registro_usuario_ref', [CUsuario::class, 'registro'])->name('registro_usuario_ref');


    //Comision
    Route::get('/lista_comision', [CComision::class, 'listar'])->name('lista_comision');


    //Metodo Pago
    Route::get('/lista_metodo', [CMetodo::class, 'listar'])->name('lista_metodo');
    Route::put('/actualizar_metodo', [CMetodo::class, 'estado'])->name('actualizar_metodo');
    Route::post('/agregar_metodo', [CMetodo::class, 'agregar'])->name('agregar_metodo');


    //usuario
    Route::get('/mi_perfil/{id}', [CUsuario::class, 'perfil'])->name('mi_perfil');
    Route::put('/actualizar_perfil', [CUsuario::class, 'actualizar_datos'])->name('actualizar_perfil');
    Route::post('/act_img', [CUsuario::class, 'actualizar_imagen'])->name('act_img');
    Route::put('/act_cont', [CUsuario::class, 'actualizar_contrasena'])->name('act_cont');


    // logout
    Route::get('/logout', [CUsuario::class, 'logout'])->name('logout');
});



















