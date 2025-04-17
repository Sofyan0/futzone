<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/lapangan', [LapanganController::class, 'index']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/laporan', function () {
    return view('laporan');
});
    Route::get('/transaksi', function () {
        return view('transaksi');
    
        
    
    });
    Route::get('/customer', function () {
        return view('customer');
    });

    Route::get('/lapangan', function () {
        return view('lapangan');
    });

    Route::get('/ubah-password', function () {
        return view('ubah-password');
    });

    Route::get('/landingpage', function () {
        return view('landingpage');

    });
    // routes/web.php
// Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan.index');

    // Route untuk melihat data customer
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');

// Route untuk edit data customer
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');

// Route untuk delete data customer
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
