<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/content', function () {
    return view('content');
})->name('content');




