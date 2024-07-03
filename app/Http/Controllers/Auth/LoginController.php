<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful.');
    }
}
