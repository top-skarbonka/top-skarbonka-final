<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.3);
            width: 450px;
            text-align: center;
        }
        .logo-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-bottom: 30px;
        }
        .logo-wrapper img {
            max-height: 200px; /* 🔥 duże loga */
            width: auto;
            object-fit: contain;
        }
        h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }
        .form-check-label {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-wrapper">
            <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" alt="Logo 1">
            <img src="http://top-price.com.pl/wp-content/uploads/2025/09/top-skarbonka.png" alt="Top Skarbonka">
        </div>
        <h2>Logowanie Admina</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Adres email" required autofocus>
            </div>
            <div class="mb-3 input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Hasło" required>
                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">👁</button>
            </div>
            <div class="mb-3 form-check text-start">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember">Zapamiętaj mnie</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
