<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Api\Admin\clientController;
use app\Http\Controllers\Api\Admin\componentController;
use app\Http\Controllers\Api\Admin\serviceController;
use app\Http\Controllers\Api\Admin\asigOrderController;
use app\Http\Controllers\Api\Admin\RoleController;


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


Route::apiResource('clients', clientController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('components', ComponentController::class);
Route::apiResource('assigned-orders', AssignedOrderController::class);
Route::apiResource('roles', RoleController::class);