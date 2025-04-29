<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\DestinasiController;


Route::get('/', [WebController::class, 'beranda'])->name('beranda');

Route::get('/paket', [PaketController::class, 'index'])->name('paket');
Route::get('/paket/{id}', [PaketController::class, 'show'])->name('show');


Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi');
Route::get('/destinasi/{id}', [DestinasiController::class, 'show'])->name('destinasi.show');



Route::get('/tentangKami', [WebController::class, 'tentangKami'])->name('tentangKami');
Route::get('/test', [WebController::class, 'test'])->name('test');
