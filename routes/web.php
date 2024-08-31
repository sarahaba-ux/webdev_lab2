<?php

// web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; // Import the LoginController

// Route for showing the homepage (handled by the controller)
Route::get('/', [LoginController::class, 'homepage'])->name('homepage');

// Route for about page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route for content page
Route::get('/content', function () {
    return view('content');
})->name('content');

// Route for showing the login form
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route for handling the login form submission
Route::post('/login', [LoginController::class, 'login']);


