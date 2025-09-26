<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie Admina | Top Skarbonka</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gradient-to-r from-purple-700 via-pink-600 to-red-500 flex items-center justify-center">

    <div class="absolute top-10 flex items-center space-x-4">
        <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" alt="Logo 1" class="h-12">
        <img src="http://top-price.com.pl/wp-content/uploads/2025/09/top-skarbonka.png" alt="Top Skarbonka" class="h-12">
    </div>

    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 relative">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Panel Admina</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-gray-700">Adres e-mail</label>
                <input id="email" type="email" name="email" required autofocus
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label for="password" class="block text-gray-700">Hasło</label>
                <div class="relative">
                    <input id="password" type="password" name="password" required
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
                    <button type="button" onclick="togglePassword()" 
                        class="absolute right-3 top-3 text-gray-500">👁️</button>
                </div>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-gray-700">Zapamiętaj mnie</label>
            </div>

            <button type="submit"
                class="w-full bg-purple-600 text-white p-3 rounded-lg hover:bg-purple-700 transition duration-300">
                Zaloguj się
            </button>
        </form>
    </div>

    <div class="absolute bottom-5 left-5">
        <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" alt="Logo" class="h-10">
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            password.type = password.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>
