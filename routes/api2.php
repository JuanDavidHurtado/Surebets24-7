<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CReferido;
use App\Http\Controllers\CProducto;
use App\Http\Controllers\CCurso;
use App\Http\Controllers\CContenido;
use App\Http\Controllers\CInversion;
use App\Http\Controllers\CCursousuario;
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

//Referido
Route::get('/lista_referido', [CReferido::class, 'listar'])->name('lista_referido');
Route::post('/agregar_usuario_referido',[CReferido::class, 'agregar'])->name('agregar_usuario_referido');
Route::post('/agregar_usuario',[CReferido::class, 'agregar'])->name('agregar_usuario');

//Inversiones(Parametrizacion)
Route::get('/lista_producto', [CProducto::class, 'listar'])->name('lista_producto');
Route::post('/agregar_producto', [CProducto::class, 'agregar'])->name('agregar_producto');
Route::put('/actualizar_producto', [CProducto::class, 'estado'])->name('actualizar_producto');

//Curso(Parametrizacion)
Route::get('/lista_curso', [CCurso::class, 'listar'])->name('lista_curso');
Route::post('/agregar_curso', [CCurso::class, 'agregar'])->name('agregar_curso');
Route::post('/actualizar_curso', [CCurso::class, 'estado'])->name('actualizar_curso');



//Contenido(Parametrizacion)
Route::get('/lista_contenido/{id}', [CContenido::class, 'listar'])->name('lista_contenido');
Route::post('/agregar_contenido', [CContenido::class, 'agregar'])->name('agregar_contenido');

//Material Contenido(parametrizacion)
Route::post('/agregar_material', [CContenidoMaterial::class, 'agregar'])->name('agregar_material');


//Usuario Inversion
Route::get('/lista_inversion', [CInversion::class, 'listar'])->name('lista_inversion');
Route::get('/seleccion/{id}', [CInversion::class, 'seleccion_plan'])->name('seleccion_inversion');
Route::post('/agregar_inversion', [CInversion::class, 'agregar'])->name('agregar_inversion');


//Usuario curso
Route::get('/lista_curso_usuario', [CCursousuario::class, 'listar'])->name('lista_curso_usuario');
Route::get('/seleccion_curso/{id}', [CCursousuario::class, 'seleccion_curso'])->name('seleccion_curso');
Route::post('/agregar_curso_usuario', [CCursousuario::class, 'agregar'])->name('agregar_curso_usuario');




