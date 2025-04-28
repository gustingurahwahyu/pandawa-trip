<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'beranda'])->name('beranda');
Route::get('/paket', [WebController::class, 'paket'])->name('paket');
Route::get('/paketDetail', [WebController::class, 'paketDetail'])->name('paketDetail');
Route::get('/destinasi', [WebController::class, 'destinasi'])->name('destinasi');
Route::get('/tentangKami', [WebController::class, 'tentangKami'])->name('tentangKami');
Route::get('/test', [WebController::class, 'test'])->name('test');
