<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Firmy – Logowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center relative">

    <!-- Logo w lewym dolnym rogu -->
    <div class="absolute bottom-4 left-4">
        <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" 
             alt="Logo" class="h-12">
    </div>

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
        
        <!-- Dwa logotypy nad panelem logowania -->
        <div class="flex justify-center items-center space-x-4 mb-6">
            <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" 
                 alt="Logo 1" class="h-14">
            <img src="http://top-price.com.pl/wp-content/uploads/2025/09/top-skarbonka.png" 
                 alt="Logo 2" class="h-14">
        </div>

        <h2 class="text-2xl font-bold text-center mb-6">Panel Firmy – Logowanie</h2>

        <!-- Formularz logowania -->
        <form method="POST" action="{{ route('company.login.submit') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label class="block mb-1 font-medium">Email:</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Hasło z opcją podglądu -->
            <div>
                <label class="block mb-1 font-medium">Hasło:</label>
                <div class="relative">
                    <input type="password" name="password" id="password" required
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="button" onclick="togglePassword()" 
                            class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                        👁️
                    </button>
                </div>
            </div>

            <!-- Zapamiętaj mnie -->
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm">Zapamiętaj mnie</label>
            </div>

            <!-- Przycisk -->
            <div>
                <button type="submit" 
                        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Zaloguj
                </button>
            </div>
        </form>
    </div>

    <!-- Skrypt do podglądu hasła -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>

</body>
</html>
