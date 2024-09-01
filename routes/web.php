<?php

// web.php
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; // Import the LoginController
use Illuminate\Support\Facades\Mail;

Route::get('/', [LoginController::class, 'homepage'])->name('homepage');
Route::get('/about', [LoginController::class, 'about'])->name('about');
Route::get('/content', [LoginController::class, 'content'])->name('content');
Route::get('/contact', [LoginController::class, 'contact'])->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);



Route::post('/contact', function () {
    $data = request()->all();
    
    Mail::to('mingkai103019@gmail.com')->send(new ContactMe($data));

    return redirect('/contact')->with('flash', 'Message Sent Successfully');
});