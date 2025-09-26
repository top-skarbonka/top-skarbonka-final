<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admina – Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #4e1c92, #b6295c);
            color: #fff;
            min-height: 100vh;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.3);
            padding: 15px;
        }
        .card {
            border: none;
            border-radius: 12px;
            transition: transform 0.2s;
            cursor: pointer;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-body {
            color: #fff;
        }
        .logout-btn {
            background: #d9534f;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Pasek nawigacji -->
    <nav class="navbar d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Panel Admina</h4>
        <div>
            <a href="{{ route('admin.companies.create') }}" class="btn btn-outline-light me-2">Firmy</a>
            <a href="#" class="btn btn-outline-light me-2">Klienci</a>
            <a href="#" class="btn btn-outline-light me-2">Transakcje</a>
            <a href="#" class="btn btn-outline-light me-2">QR Kody</a>

            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn logout-btn">Wyloguj</button>
            </form>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row g-4">
            <!-- Dodaj firmę -->
            <div class="col-md-4">
                <a href="{{ route('admin.companies.create') }}" style="text-decoration:none;">
                    <div class="card bg-warning bg-gradient h-100">
                        <div class="card-body">
                            <h5 class="card-title">🏢 Dodaj firmę</h5>
                            <p class="card-text">Zarejestruj nową firmę i nadaj jej dostęp do panelu.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Lista firm -->
            <div class="col-md-4">
                <a href="#" style="text-decoration:none;">
                    <div class="card bg-success bg-gradient h-100">
                        <div class="card-body">
                            <h5 class="card-title">📋 Lista firm</h5>
                            <p class="card-text">Zarządzaj istniejącymi firmami i edytuj dane.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Lista klientów -->
            <div class="col-md-4">
                <a href="#" style="text-decoration:none;">
                    <div class="card bg-info bg-gradient h-100">
                        <div class="card-body">
                            <h5 class="card-title">👥 Lista klientów</h5>
                            <p class="card-text">Przeglądaj i zarządzaj zarejestrowanymi klientami.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Transakcje -->
            <div class="col-md-6">
                <a href="#" style="text-decoration:none;">
                    <div class="card bg-danger bg-gradient h-100">
                        <div class="card-body">
                            <h5 class="card-title">💳 Transakcje</h5>
                            <p class="card-text">Monitoruj transakcje i historię punktów.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Generowanie QR -->
            <div class="col-md-6">
                <a href="#" style="text-decoration:none;">
                    <div class="card bg-primary bg-gradient h-100">
                        <div class="card-body">
                            <h5 class="card-title">🔑 Generowanie QR</h5>
                            <p class="card-text">Twórz i zarządzaj kodami QR dla klientów.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
