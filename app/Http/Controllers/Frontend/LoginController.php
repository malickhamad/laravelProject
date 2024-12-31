<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('frontend.login');
    }

    // Handle the login form submission
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user,admin',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user exists in the Client table and if their role matches
            $client = Client::where('email', $request->email)->first();

            if ($client && $client->role === $request->role) {
                if ($request->role === 'user') {
                    return redirect()->route('client.details', ['id' => $client->id]);
                } elseif ($request->role === 'admin') {
                    return redirect()->away('http://localhost/AdminPanelLayout/backend/dashboard');

                }
            } else {
                Auth::logout(); // Log out if role does not match
                return redirect()->back()->with('error', 'Your role is not valid');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }
    }

    // Handle the logout functionality
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
