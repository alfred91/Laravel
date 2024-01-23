<?php

use App\Http\Controllers\EmpleadoController;
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

//Route::get('/empleados', [EmpleadoController::class, 'index']);

Route::post ('/empleados/{empleado}/update', [EmpleadoController::class, 'update']);

Route::resource('/empleados', EmpleadoController::class);

//Route:get ('/empleados',)