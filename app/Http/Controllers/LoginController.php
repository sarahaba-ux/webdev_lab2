<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request (allowing optional username)
        $request->validate([
            'username' => 'nullable|alpha', // Ensure username contains only alphabetic characters
        ]);

        // Get the username from the request, default to 'guest' if not provided
        $username = $request->input('username');
        if (empty($username)) {
            $username = 'guest'; // Default to 'guest' if username is empty
        }
        
        // Store the username in the session
        $request->session()->put('username', $username);

        // Redirect to the homepage
        return redirect()->route('homepage');
    }

    public function homepage(Request $request)
    {
        // Retrieve the username from the session, default to 'guest' if not set
        $username = $request->session()->get('username', 'guest');

        // Pass the username to the homepage view
        return view('homepage', ['message' => "Welcome, $username!"]);
    }

    public function about(Request $request)
    {
        // Retrieve the username from the session, default to 'guest' if not set
        $username = $request->session()->get('username', 'guest');

        // Pass the username to the about view
        return view('about', ['message' => "Welcome, $username!"]);
    }

    public function content(Request $request)
    {
        // Retrieve the username from the session, default to 'guest' if not set
        $username = $request->session()->get('username', 'guest');

        // Pass the username to the content view
        return view('content', ['message' => "Welcome, $username!"]);
    }

    public function contact(Request $request)
    {
        // Retrieve the username from the session, default to 'guest' if not set
        $username = $request->session()->get('username', 'guest');

        // Pass the username to the contact view
        return view('contact', ['message' => "Welcome, $username!"]);
    }
}
