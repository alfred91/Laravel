<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\V1\ProductApiController;
use App\Http\Controllers\Api\V1\CategoryApiController;
use App\Http\Controllers\Api\V1\LocationApiController;
use App\Http\Controllers\Api\V1\InventoryReportApiController;

// Proteger las rutas API bajo el middleware auth:sanctum
Route::middleware('auth:sanctum')->group(function () {
    //Route::apiResource('v1/productos', ProductApiController::class);
    Route::apiResource('v1/categorias', CategoryApiController::class);
    //Route::apiResource('v1/locations', LocationApiController::class);
    Route::get('v1/inventario', [InventoryReportApiController::class, 'index']);
    Route::get('v1/inventario/{codigo}', [ProductApiController::class, 'show']);
    Route::get('v1/inventario/categoria/{categoria}', [ProductApiController::class, 'byCategory']);
    Route::delete('v1/inventario/codigo/{codigo}', [ProductApiController::class, 'destroy']);
    Route::post('v1/inventario', [ProductApiController::class, 'store']);
});

// Ruta para obtener el usuario autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Endpoint para obtener TOKEN
Route::post('/auth/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['Credenciales Incorrectas.'],
        ]);
    }

    $token = $user->createToken('myapptoken')->plainTextToken;
    return response()->json(['token' => $token]);
});
