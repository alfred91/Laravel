<?php

use App\Http\Controllers\IncidenciaController;
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
    return view('welcome');
});

//Rutas para el controlador de incidencias

Route::get('/incidencias', [IncidenciaController::class, 'index']);

Route::get('/incidencias/delete/{id}', [IncidenciaController::class, 'destroy']);

Route::resource('incidencias', IncidenciaController::class);