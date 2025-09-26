<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('company')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended('/company/dashboard');
        }

        return back()->withErrors([
            'email' => 'Nieprawidłowe dane logowania.',
        ]);
    }
}
