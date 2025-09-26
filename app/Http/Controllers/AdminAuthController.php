<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Formularz logowania admina
     */
    public function showLoginForm()
    {
        return view('auth.admin-login'); // poprawna ścieżka widoku
    }

    /**
     * Obsługa logowania admina
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard')
                ->with('success', 'Zalogowano pomyślnie ✅');
        }

        return back()->withErrors([
            'email' => 'Podane dane logowania są nieprawidłowe.',
        ]);
    }

    /**
     * Wylogowanie admina
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('success', 'Wylogowano poprawnie 👋');
    }

    /**
     * Dashboard admina – dostępny tylko po zalogowaniu
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
