<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class AdminCompanyController extends Controller
{
    /**
     * Formularz dodawania firmy
     */
    public function create()
    {
        return view('admin.create'); // plik resources/views/admin/create.blade.php
    }

    /**
     * Zapis nowej firmy
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|digits:10|unique:companies,nip',
            'postal_code' => 'required|regex:/^\d{2}-\d{3}$/',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'nullable|digits_between:9,15',
            'email' => 'required|email|unique:companies,email',
            'ratio' => 'required|numeric|min:0.01',
        ]);

        Company::create($validated);

        return redirect()->route('admin.dashboard')->with('success', '✅ Firma została dodana pomyślnie!');
    }
}
