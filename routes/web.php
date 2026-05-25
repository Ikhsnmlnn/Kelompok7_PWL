<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

// LOGIN
Route::get('/', [AuthController::class, 'login'])
    ->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

// ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.admin');
    });
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/tambah', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/hapus/{id}', [ProdukController::class, 'destroy']);
    Route::get('/transaksi', [TransaksiController::class, 'index']);
    Route::get('/transaksi/cabang/{id}', [TransaksiController::class, 'cabang']);
    Route::get('/transaksi/detail/{id}', [TransaksiController::class, 'detail']);
    Route::get('/laporan', [LaporanController::class, 'index']);

});

// MANAGER
Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/manager', function () {
        return view('manager.dashboard');
    });

});

// SUPERVISOR
Route::middleware(['auth', 'role:supervisor'])->group(function () {
    Route::get('/supervisor', function () {
        return view('supervisor.dashboard');
    });

});
// KASIR
Route::middleware(['auth', 'role:kasir'])->group(function () {
    Route::get('/kasir', function () {
        return view('kasir.dashboard');
    });

});

// GUDANG
Route::middleware(['auth', 'role:gudang'])->group(function () {
    Route::get('/gudang', function () {
        return view('gudang.dashboard');

    });
    
});