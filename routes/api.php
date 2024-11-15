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
use App\Http\Controllers\CContenidoMaterial;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CBotsusuario;
use App\Http\Controllers\CSaldo;
use App\Http\Middleware\CheckTipoUsuario;
use App\Http\Controllers\CNodoUsuInversionController;

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
Route::post('/pon_con', [CUsuario::class, 'ponerse_contacto'])->name('pon_con');


Route::post('/registro_usuario', [CUsuario::class, 'registro'])->name('registro_usuario');
Route::post('/auth_login', [AuthController::class, 'login'])->name('auth_login');


Route::post('/enviar_correo', [CUsuario::class, 'sendResetLinkEmail'])->name('enviar_correo');
Route::post('/reset_password', [AuthController::class, 'resetPassword'])->name('reset_password');



Route::middleware('auth:sanctum')->group(function () {

    //Curso(Parametrizacion)
    Route::post('/agregar_curso', [CCurso::class, 'agregar'])->name('agregar_curso')->middleware('checkTipoUsuario:1');
    Route::post('/actualizar_curso', [CCurso::class, 'estado'])->name('actualizar_curso')->middleware('checkTipoUsuario:1');
    Route::get('/lista_curso', [CCurso::class, 'listar'])->name('lista_curso');


    //Contenido(Parametrizacion)
    Route::get('/lista_contenido/{id}', [CContenido::class, 'listar'])->name('lista_contenido')->middleware('checkTipoUsuario:1');
    Route::post('/agregar_contenido', [CContenido::class, 'agregar'])->name('agregar_contenido')->middleware('checkTipoUsuario:1');

    //Material Contenido(parametrizacion)
    Route::post('/agregar_material', [CContenidoMaterial::class, 'agregar'])->name('agregar_material')->middleware('checkTipoUsuario:1');
    Route::get('/lista_material/{id}', [CContenidoMaterial::class, 'listar'])->name('lista_material')->middleware('checkTipoUsuario:1');
    Route::get('/lista_material/{id}', [CContenidoMaterial::class, 'listar'])->name('lista_material')->middleware('checkTipoUsuario:1');
    Route::get('/showMaterial/{idMaterial}', [CContenidoMaterial::class, 'showMaterial'])->name('showMaterial')->middleware('checkTipoUsuario:1');

    //Inversiones(Parametrizacion)
    Route::get('/lista_producto', [CProducto::class, 'listar'])->name('lista_producto');
    Route::post('/agregar_producto', [CProducto::class, 'agregar'])->name('agregar_producto')->middleware('checkTipoUsuario:1');
    Route::put('/actualizar_producto', [CProducto::class, 'estado'])->name('actualizar_producto')->middleware('checkTipoUsuario:1');


    //Pendiente y Administracion

    Route::get('/obt_pag_men/{id}', [CAdministracion::class, 'lista_pago_mensual'])->name('obt_pag_men')->middleware('checkTipoUsuario:1');
    Route::put('/est_pag', [CAdministracion::class, 'estado_pago'])->name('est_pag')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_curso', [CAdministracion::class, 'listar_curso'])->name('pendiente_curso')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_inversion', [CAdministracion::class, 'listar_inversion'])->name('pendiente_inversion')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_adelanto', [CAdministracion::class, 'listar_adelanto'])->name('pendiente_adelanto')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_comision', [CAdministracion::class, 'listar_comision'])->name('pendiente_comision')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_comision_curso', [CAdministracion::class, 'listar_comision_curso'])->name('pendiente_comision_curso')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_comision_especial', [CAdministracion::class, 'listar_comision_especial'])->name('pendiente_comision_especial')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_comision_bot', [CAdministracion::class, 'listar_comision_bot'])->name('pendiente_comision_bot')->middleware('checkTipoUsuario:1');
    Route::get('/lis_usu', [CAdministracion::class, 'listar_usuario'])->name('lis_usu')->middleware('checkTipoUsuario:1');
    Route::get('/lis_inv', [CAdministracion::class, 'listar_inversion_actual'])->name('lis_inv')->middleware('checkTipoUsuario:1');
    Route::put('/est_inv', [CAdministracion::class, 'estado_inversion'])->name('est_inv')->middleware('checkTipoUsuario:1');
    Route::put('/est_inv_fin', [CAdministracion::class, 'estado_inversion_finalizar'])->name('est_inv_fin')->middleware('checkTipoUsuario:1');
    Route::put('/est_cur', [CAdministracion::class, 'estado_curso'])->name('est_cur')->middleware('checkTipoUsuario:1');
    Route::put('/est_usu', [CAdministracion::class, 'estado_usuario'])->name('est_usu')->middleware('checkTipoUsuario:1');
    Route::put('/est_com', [CAdministracion::class, 'estado_comision'])->name('est_com')->middleware('checkTipoUsuario:1');
    Route::put('/est_ade', [CAdministracion::class, 'estado_adelanto'])->name('est_ade')->middleware('checkTipoUsuario:1');
    Route::put('/est_bot', [CAdministracion::class, 'estado_bot'])->name('est_bot')->middleware('checkTipoUsuario:1');
    Route::get('/pendiente_bot', [CAdministracion::class, 'listar_bot'])->name('pendiente_bot')->middleware('checkTipoUsuario:1');
    Route::put('/est_usu_gir', [CAdministracion::class, 'estado_usuario_giro'])->name('est_usu_gir')->middleware('checkTipoUsuario:1');


    //Usuario Inversion
    Route::get('/lista_inversion', [CInversion::class, 'listar'])->name('lista_inversion');
    Route::get('/seleccion/{id}', [CInversion::class, 'seleccion_plan'])->name('seleccion_inversion');
    Route::post('/agregar_inversion', [CInversion::class, 'agregar'])->name('agregar_inversion');
    Route::get('/pro_usu/{id}', [CInversion::class, 'producto_usuario'])->name('pro_usu');
    Route::post('/agregar_monto', [CInversion::class, 'agregar_monto'])->name('agregar_monto');
    Route::get('/ade_usu/{id}', [CInversion::class, 'adelanto_usuario'])->name('ade_usu');
    Route::get('/usu_inv_act/{id}', [CInversion::class, 'producto_usuario_activo'])->name('usu_inv_act');


    //Usuario curso
    Route::get('/lista_curso_usuario', [CCursousuario::class, 'listar'])->name('lista_curso_usuario');
    Route::get('/seleccion_curso/{id}/{id_usu}', [CCursousuario::class, 'seleccion_curso'])->name('seleccion_curso');
    Route::get('/seleccion_curso_compra/{id}', [CCursousuario::class, 'seleccion_curso_compra'])->name('seleccion_curso_compra');
    Route::get('/cur_usu/{id}', [CCursousuario::class, 'curso_usuario'])->name('cur_usu');
    Route::post('/agregar_curso_usuario', [CCursousuario::class, 'agregar'])->name('agregar_curso_usuario');


    //Referido
    Route::get('/lista_referido/{id}', [CReferido::class, 'listar'])->name('lista_referido');
    Route::post('/registro_usuario_ref', [CUsuario::class, 'registro'])->name('registro_usuario_ref');
    Route::get('/buscar_posicion_ref/{idPatrocinador}', [CNodoUsuInversionController::class, 'buscarPosicionRef'])->name('buscarPosicionRef');
    Route::get('/nodos-usrInv', [CNodoUsuInversionController::class, 'index'])->name('nodoUsuInversion');
    Route::get('/get-usuInv/{usuario_id_sesion}', [CNodoUsuInversionController::class, 'obtener_usu_inv_x_usrId'])->name('get-usuInv');


    //Comision
    Route::get('/lista_comision/{id}', [CComision::class, 'listar'])->name('lista_comision');
    Route::get('/lista_comision_curso/{id}', [CComision::class, 'listar_comision_curso'])->name('lista_comision_curso');
    Route::get('/lis_com_arb/{id}', [CComision::class, 'listar_comision_arbol'])->name('lis_com_arb');
    Route::get('/tot_com_arb/{id}', [CComision::class, 'comision_binario'])->name('tot_com_arb');
    Route::get('/tot_com_inv/{id}', [CComision::class, 'comision_inversion'])->name('tot_com_inv');
    Route::get('/tot_com_tipo/{id}', [CComision::class, 'comision_tipo'])->name('tot_com_tipo');
    Route::get('/lis_com_bot/{id}', [CComision::class, 'lista_comision_bot'])->name('lis_com_bot');

    //Pago mensual 
    Route::get('/tot_pag_men/{id}', [CInversion::class, 'pago_mensual'])->name('tot_pag_men');
    //Balance General
    Route::get('/bal_gen/{id}', [CInversion::class, 'balance_general'])->name('bal_gen');

    //Metodo Pago
    Route::get('/lista_metodo/{id}', [CMetodo::class, 'listar'])->name('lista_metodo');
    Route::put('/actualizar_metodo', [CMetodo::class, 'estado'])->name('actualizar_metodo');
    Route::post('/agregar_metodo', [CMetodo::class, 'agregar'])->name('agregar_metodo');


    //usuario
    Route::get('/mi_perfil/{id}', [CUsuario::class, 'perfil'])->name('mi_perfil');
    Route::put('/actualizar_perfil', [CUsuario::class, 'actualizar_datos'])->name('actualizar_perfil');
    Route::post('/act_img', [CUsuario::class, 'actualizar_imagen'])->name('act_img');
    Route::put('/act_cont', [CUsuario::class, 'actualizar_contrasena'])->name('act_cont');
    Route::get('/obtener_usuario/{id}', [CUsuario::class, 'obtener_usuario'])->name('obtener_usuario');
    Route::get('/his_pun/{id}', [CUsuario::class, 'punto_usuario'])->name('his_pun');

    //Reasignar Nodo
    Route::post('/rea_nod', [CUsuario::class, 'reasignar_nodo'])->name('rea_nod');

    //Rutas Nueva
    Route::get('/calcular_comision_referido/{id_usu_inv}', [CNodoUsuInversionController::class, 'calcularComision'])->name('calcularComision');

    Route::get('/obtener_producto/{id}', [CProducto::class, 'obtenerProducto'])->name('obtener_producto')->middleware('checkTipoUsuario:1');
    Route::post('/actualizar_prod', [CProducto::class, 'actualizar'])->name('actualizar_prod')->middleware('checkTipoUsuario:1');
    Route::get('/obtener_img/{id}', [CProducto::class, 'obtenerImagen'])->name('obtener_img');


    //Bots
    Route::get('/lista_bots_usuario', [CBotsusuario::class, 'listar'])->name('lista_bots_usuario');
    Route::get('/seleccion_bots_compra/{id}', [CBotsusuario::class, 'seleccion_bots_compra'])->name('seleccion_bots_compra');
    Route::post('/agregar_bots_usuario', [CBotsusuario::class, 'agregar'])->name('agregar_bots_usuario');
    Route::get('/bot_usu/{id}', [CBotsusuario::class, 'bot_usuario'])->name('bot_usu');

    //Saldo gir_sal
    Route::post('/gir_sal', [CSaldo::class, 'agregar'])->name('gir_sal');
    Route::get('/his_sal/{id}', [CSaldo::class, 'historial'])->name('his_sal');
    Route::get('/his_adm', [CSaldo::class, 'historial_adm'])->name('his_adm')->middleware('checkTipoUsuario:1');

    // logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});














