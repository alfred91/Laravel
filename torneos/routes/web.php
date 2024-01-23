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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [TorneoController::class, 'index'])->middleware(['auth', 'verified', 'mdrol:admin'])->name('dashboard');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('milogout');
Route::get('/usuarios', [ProfileController::class, 'index'])->middleware(['auth', 'verified', 'mdrol:admin'])->name('usuarios');

Route::get('/torneos/{id}', [TorneoController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/juegos', JuegoController::class);

require __DIR__ . '/auth.php';
