<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ManagerController;

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

    Route::get('/manager/transaksi', [ManagerController::class, 'transaksi']);


    Route::get('/manager/stok', [ManagerController::class, 'stok']);

    Route::get('/manager/laporan', function () {
        return view('manager.laporan');
    });

     Route::get('/manager/laporan', [ManagerController::class, 'laporan']);

     Route::get('/manager/laporan/pdf', [ManagerController::class, 'cetakLaporan']);

});

// ======================================
// SUPERVISOR
// ======================================

Route::middleware(['auth', 'role:supervisor'])->group(function () {

    Route::get('/supervisor', function () {
        return view('supervisor.dashboard');
    });

    Route::get('/supervisor/monitoring-transaksi', function () {
        return view('supervisor.monitoring_transaksi');
    });

    Route::get('/supervisor/kasir', function () {
        return view('supervisor.kasir');
    });

    Route::get('/supervisor/laporan-transaksi', function () {
        return view('supervisor.laporan_transaksi');
    });

});

// KASIR
Route::middleware(['auth','role:kasir'])->group(function () {

    Route::get('/kasir', [KasirController::class,'dashboard']);

    Route::get('/kasir/transaksi', [KasirController::class,'transaksi']);

    Route::post('/kasir/transaksi/store', [KasirController::class,'store']);

    Route::get('/kasir/riwayat', [KasirController::class,'riwayat']);

    Route::get('/kasir/detail/{id}', [KasirController::class,'detail']);

    Route::get('/kasir/transaksi-baru', [KasirController::class, 'transaksiBaru']);

    Route::post('/kasir/pembayaran', [KasirController::class,'pembayaran']);

});

// ======================================
// GUDANG
// ======================================

Route::middleware(['auth', 'role:gudang'])->group(function () {

    // Dashboard
    Route::get('/gudang', function () {
        return view('gudang.dashboard');
    });

    // Stok Barang
    Route::get('/gudang/stok', function () {
        return view('gudang.stok');
    });

    // Barang Masuk
    Route::get('/gudang/barang-masuk', function () {
        return view('gudang.barang_masuk');
    });

    // Barang Keluar
    Route::get('/gudang/barang-keluar', function () {
        return view('gudang.barang_keluar');
    });

    //Riwayat Stok
    Route::get('/gudang/riwayat-stok', function () {
    return view('gudang.riwayat_stok');
    });

});