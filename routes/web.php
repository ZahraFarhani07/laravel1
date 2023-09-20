<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

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
    return view('template.master');
})->name('home');

// Route::get('/anggota', [AnggotaController::class, 'create'])->name('anggota');
// Route::get('/petugas', [PetugasController::class, 'create'])->name('petugas');
// Route::get('/buku', [BukuController::class, 'create'])->name('buku');
// Route::get('/rak', [RakController::class, 'create'])->name('rak');
// Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman');
// Route::get('/pengembalian', [PengembalianController::class, 'create'])->name('pengembalian');

Route::resource('anggota', AnggotaController::class); // Resourceful route for AnggotaController
Route::resource('petugas', PetugasController::class); // Resourceful route for PetugasController
Route::resource('buku', BukuController::class); // Resourceful route for BukuController
Route::resource('rak', RakController::class); // Resourceful route for RakController
Route::resource('peminjaman', PeminjamanController::class); // Resourceful route for PeminjamanController
Route::resource('pengembalian', PengembalianController::class);