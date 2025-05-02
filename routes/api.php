<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AsigOrdenController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::apiResource('clients', ClientController::class);
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('components', ComponentController::class);
    Route::apiResource('assigned-orders', AsigOrdenController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('users', UserController::class);
});



