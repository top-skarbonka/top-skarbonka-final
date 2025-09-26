<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\ClientQrController;
use App\Http\Controllers\AdminCompanyController;

/*
|--------------------------------------------------------------------------
| Panel firmy
|--------------------------------------------------------------------------
*/
Route::get('/company/login', function () {
    return view('auth.company-login');
})->name('company.login');

Route::post('/company/login', [CompanyAuthController::class, 'login'])
    ->name('company.login.submit');

/*
|--------------------------------------------------------------------------
| Panel admina
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::middleware('auth:admin')->group(function () {
    // Dashboard admina
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Formularz dodawania firm
    Route::get('/admin/companies/create', [AdminCompanyController::class, 'create'])
        ->name('admin.companies.create');

    // Zapis firmy
    Route::post('/admin/companies', [AdminCompanyController::class, 'store'])
        ->name('admin.companies.store');

    // Wylogowanie admina
    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
        ->name('admin.logout');
});
