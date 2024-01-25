<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TorneoController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\JuegoController;

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

//RUTAS WEB
Route::get('/', function () {
    return view('welcome');
});


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('milogout');


//RUTAS ADMIN
Route::prefix('admin')->middleware(['auth', 'verified', 'mdrol:admin'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [TorneoController::class, 'index'])->name('dashboard');
    Route::get('/usuarios', [ProfileController::class, 'index'])->name('usuarios');
    Route::get('/usuarios/create', [ProfileController::class, 'create'])->name('usuarios.create');
    Route::get('/juegos/create', [JuegoController::class, 'create'])->name('juegos.create');

    Route::get('/torneos/create', [TorneoController::class, 'create'])->name('torneos.create');
    Route::post('/torneos/store', [TorneoController::class, 'store'])->name('torneos.store');
    Route::get('/torneos/{id}', [TorneoController::class, 'show'])->name('torneos');

    Route::resource('/juegos', JuegoController::class);
});


require __DIR__ . '/auth.php';
