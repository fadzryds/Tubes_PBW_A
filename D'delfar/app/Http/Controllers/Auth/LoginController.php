<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showForm()
    {
        // Jika sudah login, redirect ke landing page
        if (Auth::check()) {
            return redirect()->route('landing');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.'
            ])->onlyInput('email');
        }

        // Regenerate session wajib agar login berhasil
        $request->session()->regenerate();

        $user = Auth::user();

        // Admin / staff ke panel admin
        if (in_array($user->role, ['admin', 'staff'])) {
            return redirect('/admin');
        }

        // User biasa ke landing page
        return redirect()->route('landing');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landing');
    }
}