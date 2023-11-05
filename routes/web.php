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

Route::get('/register', function () {
    return view('auth/register');
})->name('register');

// consumo de api 
Route::get('/dashboard_index', function () {
    return view('dashboard.cursos');
})->name('dashboard_index');
