<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Klienta – Logowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center" 
      style="background: linear-gradient(135deg, #7F00FF, #E100FF);">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md relative">
        <!-- LOGA -->
        <div class="flex justify-center mb-6 space-x-4">
            <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" 
                 alt="Top Price" class="h-16">
            <img src="http://top-price.com.pl/wp-content/uploads/2025/09/top-skarbonka.png" 
                 alt="Top Skarbonka" class="h-16">
        </div>

        <h2 class="text-2xl font-bold text-center mb-6">Panel Klienta – Logowanie</h2>

        <!-- Formularz -->
        <form method="POST" action="{{ route('client.login.submit') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium mb-1">Adres e-mail</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Hasło (ID Klienta)</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <button type="button" onclick="togglePassword()" 
                            class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                        👁️
                    </button>
                </div>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-600">Zapamiętaj mnie</label>
            </div>

            <button type="submit" 
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-semibold transition">
                Zaloguj się
            </button>
        </form>

        <!-- Logo w rogu -->
        <div class="absolute bottom-2 left-2">
            <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" alt="Top Price" class="h-10">
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            passwordField.type = passwordField.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
