<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PrestamoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('new-prestamo');
});

Route::get('/', [PrestamoController::class, 'create'])
    ->name('register');

Route::post('/crear', [PrestamoController::class, 'store'])
    ->name('crearPrestamo');

Route::get('/mostrar/{id}', [PrestamoController::class, 'show'])
    ->name('mostrarPrestamo');




