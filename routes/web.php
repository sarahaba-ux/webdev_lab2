<?php

// web.php
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; // Import the LoginController
use Illuminate\Support\Facades\Mail;

Route::get('/', [LoginController::class, 'homepage'])->name('homepage');
Route::get('/about/{username?}', [LoginController::class, 'about'])->name('about');
Route::get('/content/{username?}', [LoginController::class, 'content'])->name('content');
Route::get('/contact/{username?}', [LoginController::class, 'contact'])->name('contact');
Route::get('/user/{username?}', [LoginController::class, 'userProfile'])->name('user.profile');

// Redirect /home to /
Route::redirect('/home', '/');

// Login route
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Contact form route
Route::post('/contact', function () {
    $data = request()->all();
    Mail::to('mingkai103019@gmail.com')->send(new ContactMe($data));
    return redirect('/contact')->with('flash', 'Message Sent Successfully');
});
