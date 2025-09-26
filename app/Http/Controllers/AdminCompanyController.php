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
        return view('admin.add-company');
    }

    /**
     * Zapis nowej firmy w bazie
     */
    public function store(Request $request)
    {
        // Walidacja danych
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'postal_code'   => 'required|regex:/^[0-9]{2}-[0-9]{3}$/',
            'city'          => 'required|string|max:255',
            'address'       => 'required|string|max:255',
            'nip'           => 'required|digits:10',
            'phone'         => 'nullable|string|max:20',
            'email'         => 'required|email|unique:companies,email',
            'exchange_rate' => 'required|numeric|min:0.01',
        ]);

        // Generowanie hasła dla firmy
        $generatedPassword = \Str::random(10);

        // Zapis firmy
        $company = Company::create([
            'name'          => $validated['name'],
            'postal_code'   => $validated['postal_code'],
            'city'          => $validated['city'],
            'address'       => $validated['address'],
            'nip'           => $validated['nip'],
            'phone'         => $validated['phone'] ?? null,
            'email'         => $validated['email'],
            'password'      => bcrypt($generatedPassword),
            'exchange_rate' => $validated['exchange_rate'],
        ]);

        // (opcjonalnie) Możemy też od razu zwrócić hasło wygenerowane dla firmy
        return redirect()->route('admin.companies.create')
            ->with('success', "✅ Firma {$company->name} została dodana. Hasło do logowania: {$generatedPassword}");
    }
}
