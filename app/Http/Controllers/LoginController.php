<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
{
    // Validate the request (allowing optional username)
    $request->validate([
        'username' => 'nullable|alpha',
    ]);

    // Get the username from the request
    $username = $request->input('username');

   
    // Redirect to the homepage with the username as a query parameter
    return redirect()->route('homepage', ['username' => $username]);
}

public function homepage(Request $request)
{
    // Retrieve the username from the query parameters
    $username = $request->query('username', 'user'); // 'user' is the default if no username is provided
    
    // Pass the username to the homepage view
    return view('homepage', ['message' => "Welcome, $username!"]);
}

}





