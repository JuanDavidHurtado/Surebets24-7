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

//Referido
Route::get('/lista_referido', [CReferido::class, 'listar'])->name('lista_referido');

//Inversiones(Parametrizacion)
Route::get('/lista_producto', [CProducto::class, 'listar'])->name('lista_producto');
Route::post('/agregar_producto', [CProducto::class, 'agregar'])->name('agregar_producto');
Route::put('/actualizar_producto', [CProducto::class, 'estado'])->name('actualizar_producto');

//Curso(Parametrizacion)
Route::get('/lista_curso', [CCurso::class, 'listar'])->name('lista_curso');
Route::post('/agregar_curso', [CCurso::class, 'agregar'])->name('agregar_curso');
Route::put('/actualizar_curso', [CCurso::class, 'estado'])->name('actualizar_curso');


//Contenido(Parametrizacion)
Route::get('/lista_contenido/{id}', [CContenido::class, 'listar'])->name('lista_contenido');
Route::post('/agregar_contenido', [CContenido::class, 'agregar'])->name('agregar_contenido');

//Usuario Inversion
Route::get('/lista_inversion', [CInversion::class, 'listar'])->name('lista_inversion');
Route::get('/seleccion/{id}', [CInversion::class, 'seleccion_plan'])->name('seleccion_inversion');
Route::post('/agregar_inversion', [CInversion::class, 'agregar'])->name('agregar_inversion');
Route::get('/pro_usu', [CInversion::class, 'producto_usuario'])->name('pro_usu');



//Usuario curso
Route::get('/lista_curso', [CCursousuario::class, 'listar'])->name('lista_curso');
Route::get('/seleccion_curso/{id}', [CCursousuario::class, 'seleccion_curso'])->name('seleccion_curso');
Route::post('/agregar_curso_usuario', [CCursousuario::class, 'agregar'])->name('agregar_curso_usuario');
Route::get('/cur_usu', [CInversion::class, 'curso_usuario'])->name('cur_usu');


//Usuario
Route::post('/registro_usuario', [CUsuario::class, 'registro'])->name('registro_usuario');

//Pendiente y Administracion
Route::get('/pendiente_curso', [CAdministracion::class, 'listar_curso'])->name('pendiente_curso');
Route::get('/pendiente_inversion', [CAdministracion::class, 'listar_inversion'])->name('pendiente_inversion');
Route::get('/pendiente_comision', [CAdministracion::class, 'listar_comision'])->name('pendiente_comision');
Route::get('/lis_usu', [CAdministracion::class, 'listar_usuario'])->name('lis_usu');
Route::put('/est_inv', [CAdministracion::class, 'estado_inversion'])->name('est_inv');
Route::put('/est_cur', [CAdministracion::class, 'estado_curso'])->name('est_cur');
Route::put('/est_usu', [CAdministracion::class, 'estado_usuario'])->name('est_usu');
Route::put('/est_com', [CAdministracion::class, 'estado_comision'])->name('est_com');




//Inversiones(Parametrizacion)
Route::get('/lista_metodo', [CMetodo::class, 'listar'])->name('lista_metodo');
Route::post('/agregar_metodo', [CMetodo::class, 'agregar'])->name('agregar_metodo');
Route::put('/actualizar_metodo', [CMetodo::class, 'estado'])->name('actualizar_metodo');

//Comision
Route::get('/lista_comision', [CComision::class, 'listar'])->name('lista_comision');








