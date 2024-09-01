<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    private function getUsername(Request $request)
    {
        // Retrieve the username from the session, default to 'guest' if not set or empty
        return $request->session()->get('username', 'guest') ?: 'guest';
    }

    public function login(Request $request)
    {
        // Validate the request (allowing optional username)
        $request->validate([
            'username' => 'nullable|alpha',
        ]);

        // Get the username from the request, and default to 'guest' if it's empty
        $username = $request->input('username', 'guest');

        // Store the username in the session
        $request->session()->put('username', $username);

        // Redirect to the homepage
        return redirect()->route('homepage');
    }

    public function homepage(Request $request)
    {
        // Get the username using the centralized method
        $username = $this->getUsername($request);

        // Pass the username to the homepage view
        return view('homepage', ['message' => "Welcome, $username!"]);
    }

    public function about(Request $request)
    {
        // Get the username using the centralized method
        $username = $this->getUsername($request);

        // Pass the username to the about view
        return view('about', ['message' => "Welcome, $username!"]);
    }

    public function content(Request $request)
    {
        // Get the username using the centralized method
        $username = $this->getUsername($request);

        // Pass the username to the content view
        return view('content', ['message' => "Welcome, $username!"]);
    }

    public function contact(Request $request)
    {
        // Get the username using the centralized method
        $username = $this->getUsername($request);

        // Pass the username to the contact view
        return view('contact', ['message' => "Welcome, $username!"]);
    }
}
