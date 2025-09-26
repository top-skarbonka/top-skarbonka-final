<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\ClientQrController;

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

// Dashboard admina (po zalogowaniu)
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Wylogowanie admina
    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
        ->name('admin.logout');
});

/*
|--------------------------------------------------------------------------
| Panel klienta
|--------------------------------------------------------------------------
*/
Route::get('/client/login', [ClientAuthController::class, 'showLoginForm'])
    ->name('client.login');

Route::post('/client/login', [ClientAuthController::class, 'login'])
    ->name('client.login.submit');

/*
|--------------------------------------------------------------------------
| Generowanie kodów QR przez klienta
|--------------------------------------------------------------------------
*/
Route::get('/client/generate-qr', function () {
    return view('generate-qr');
})->name('client.generateQr');

Route::post('/client/generate-qr', [ClientQrController::class, 'store'])
    ->name('client.generateQr.submit');
