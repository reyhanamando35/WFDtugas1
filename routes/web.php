<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('catalog');
})->name('catalog');

// Route::get('/', function () {
//     return view('about');
// })->name('about');