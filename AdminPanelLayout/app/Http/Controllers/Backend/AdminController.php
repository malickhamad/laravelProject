<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Backend.Layout.dashboard');
    }

    public function index()
    {
        return view('Backend.Layout.dashboard'); // Adjust the view path as needed
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.dashboard');
        }

        // Authentication failed...
        return redirect()->route('admin.login')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
