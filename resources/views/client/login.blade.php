<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Klienta | Top Skarbonka</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #8e2de2, #ff416c);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .logo-bottom {
            position: absolute;
            bottom: 20px;
            left: 20px;
        }
        .logo-top {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-top img {
            height: 100px; /* identyczne jak w panelu admina */
            margin: 0 15px;
        }
        .login-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            width: 360px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }
        .form-group input:focus {
            border-color: #7d2ae8;
        }
        .checkbox-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin: 10px 0 20px 0;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: #7d2ae8;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn:hover {
            background: #5a1bb5;
        }
    </style>
</head>
<body>
    <!-- Logo w górnej części -->
    <div class="logo-top">
        <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" alt="Top Price">
        <img src="http://top-price.com.pl/wp-content/uploads/2025/09/top-skarbonka.png" alt="Top Skarbonka">
    </div>

    <div class="login-box">
        <h2>Panel Klienta</h2>
        <form method="POST" action="{{ route('client.login.submit') }}">
            @csrf
            <div class="form-group">
                <label for="email">Adres e-mail</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Hasło (ID Klienta)</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="checkbox-group">
                <label><input type="checkbox" name="remember"> Zapamiętaj mnie</label>
                <label><input type="checkbox" onclick="togglePassword()"> Pokaż hasło</label>
            </div>

            <button type="submit" class="btn">Zaloguj się</button>
        </form>
    </div>

    <!-- Logo w lewym dolnym rogu -->
    <div class="logo-bottom">
        <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" alt="Top Price" height="60">
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
