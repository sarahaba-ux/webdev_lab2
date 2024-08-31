<?php

// web.php
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; // Import the LoginController
use Illuminate\Support\Facades\Mail;

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

// Route for contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    $data = request()->all();
    
    Mail::to('mingkai103019@gmail.com')->send(new ContactMe($data));

    return redirect('/contact')->with('flash', 'Message Sent Successfully');
});
