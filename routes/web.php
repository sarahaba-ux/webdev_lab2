<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;

// Redirect root route to the login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Login route
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Homepage route
Route::get('/homepage', [LoginController::class, 'homepage'])->name('homepage');

// Other routes
// About route with an optional parameter {username?}
Route::get('/about/{username?}', [LoginController::class, 'about'])
    ->name('about')
    ->where('username?', '[A-Za-z]'); // Constraint: only alphabetic characters

Route::get('/content/{username?}', [LoginController::class, 'content'])
    ->name('content')
    ->where('username?', '[A-Za-z]'); // Constraint: only alphabetic characters

Route::get('/contact/{username?}', [LoginController::class, 'contact'])
    ->name('contact')
    ->where('username?', '[A-Za-z]'); // Constraint: only alphabetic characters

Route::get('/user/{username?}', [LoginController::class, 'userProfile'])
    ->name('user.profile')
    ->where('username?', '[A-Za-z]'); // Constraint: only alphabetic characters

// Redirect /home to /
Route::redirect('/home', '/');

// Contact form route
Route::post('/contact', function () {
    $data = request()->all();
    Mail::to('mingkai103019@gmail.com')->send(new ContactMe($data));
    return redirect('/contact')->with('flash', 'Message Sent Successfully');
});
