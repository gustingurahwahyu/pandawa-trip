<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\DestinasiController;


Route::get('/', [WebController::class, 'beranda'])->name('beranda');
<<<<<<< HEAD

Route::get('/paket', [PaketController::class, 'index'])->name('paket');
Route::get('/paket/{id}', [PaketController::class, 'show'])->name('paket.show');


Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi');
Route::get('/destinasi/{id}', [DestinasiController::class, 'show'])->name('destinasi.show');


=======
Route::get('/paket', [WebController::class, 'paket'])->name('paket');
Route::get('/paketDetail', [WebController::class, 'paketDetail'])->name('paketDetail');
Route::get('/destinasi', [WebController::class, 'destinasi'])->name('destinasi');
>>>>>>> 2d20e85ef2d649acc85fad54d6d8be232f514bbd
Route::get('/tentangKami', [WebController::class, 'tentangKami'])->name('tentangKami');
Route::get('/test', [WebController::class, 'test'])->name('test');
