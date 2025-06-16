<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\DestinasiController;


Route::get('/', [WebController::class, 'beranda'])->name('beranda');

Route::get('/paket', [PaketController::class, 'index'])->name('paket');
Route::get('/PDetail/{id}', [PaketController::class, 'show'])->name('show');


Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi');
Route::post('/destinasi/{id}/like', [DestinasiController::class, 'like'])->name('destinasi.like');



Route::get('/tentangKami', [WebController::class, 'tentangKami'])->name('tentangKami');
