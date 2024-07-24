<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\PelangganController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

//tarif
Route::get('/tarif', [TarifController::class, 'index'])->name('tarif/index');
Route::get('/tarif/create', [TarifController::class, 'create'])->name('tarif/create');
Route::post('/tarif/store', [TarifController::class, 'store'])->name('tarif/store');

//pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan/index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan/create', [PelangganController::class, 'store'])->name('pelanggan/store');

