<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\PetugasOnly;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::middleware(AdminOnly::class)->group(function () {
       Route::get('/user', [UserController::class, 'index'])->name('i-user');
       Route::get('/user/create', [UserController::class, 'create'])->name('c-user');
       Route::post('/user', [UserController::class, 'store'])->name('s-user');

       //    buku
       Route::get('/buku', [BukuController::class, 'index'])->name('i-buku');

       //    anggota
          Route::get('/anggota', [AnggotaController::class, 'index'])->name('i-anggota');
    });
    
    Route::middleware(PetugasOnly::class)->group(function () {
 

    //    peminjaman
       Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('i-peminjaman');

    //    pengembalian
       Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('i-pengembalian');
       Route::get('/pengembalian/{id}', [PengembalianController::class, 'store'])->name('s-pengembalian');
    });
    
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('store-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');