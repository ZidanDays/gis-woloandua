<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Method untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Login process
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password')))
        {
            // Redirect to the intended page or default to the dashboard
            // return redirect()->intended(route('dashboard'));
            return redirect()->intended(route('dashboard'));
        }

        return back()->with('error', 'The provided credentials do not match our records.');

        
    }

    // Method for logout
    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

    
        return redirect('/')->with('status', 'Anda telah berhasil logout!');
    }
    
}