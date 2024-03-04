<?php

use App\Http\Controllers\Api\AnggotaController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BukuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/buku', [BukuController::class, 'index']);
    Route::post('/buku', [BukuController::class, 'store']);
    Route::put('/buku', [BukuController::class, 'update']);
    Route::delete('/buku/{id}', [BukuController::class, 'delete']);

    Route::get('/anggota', [AnggotaController::class, 'index']);
    Route::post('/anggota', [AnggotaController::class, 'store']);
    Route::put('/anggota', [AnggotaController::class, 'update']);
    Route::delete('/anggota/{id}', [AnggotaController::class, 'delete']);
});

Route::post('/login', [AuthController::class, 'login']);

