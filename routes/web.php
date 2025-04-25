<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/destinasi', function () {
    return view('destinasi');
});
Route::get('/about', function () {
    return view('about');
});
