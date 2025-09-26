<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj firmę</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 flex items-center justify-center">
    <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-xl w-full max-w-2xl">
        <h2 class="text-3xl font-bold text-center text-white mb-6">➕ Dodaj nową firmę</h2>

        <form action="{{ route('admin.companies.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Nazwa firmy -->
            <div>
                <label class="block text-white font-medium">Nazwa firmy</label>
                <input type="text" name="name" required
                       class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- NIP -->
            <div>
                <label class="block text-white font-medium">NIP</label>
                <input type="text" name="nip" maxlength="10" pattern="\d{10}" required
                       placeholder="1234567890"
                       class="w-full tracking-widest px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- Kod pocztowy -->
            <div>
                <label class="block text-white font-medium">Kod pocztowy</label>
                <input type="text" name="postal_code" maxlength="6" pattern="\d{2}-\d{3}" required
                       placeholder="00-000"
                       class="w-full tracking-widest px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- Miasto -->
            <div>
                <label class="block text-white font-medium">Miasto</label>
                <input type="text" name="city" required
                       class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- Ulica i nr -->
            <div>
                <label class="block text-white font-medium">Ulica i numer</label>
                <input type="text" name="address" required
                       class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- Telefon -->
            <div>
                <label class="block text-white font-medium">Numer telefonu</label>
                <input type="tel" name="phone" pattern="[0-9]{9}" placeholder="123456789"
                       class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-white font-medium">Adres email (login)</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- Przelicznik -->
            <div>
                <label class="block text-white font-medium">Przelicznik (zł → Top Points)</label>
                <input type="number" step="0.01" name="ratio" required
                       placeholder="np. 1 zł = 0.5 punktu"
                       class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <!-- Przycisk -->
            <div class="text-center">
                <button type="submit"
                        class="w-full py-3 bg-purple-600 hover:bg-purple-700 rounded-lg text-white font-bold text-lg shadow-md transition">
                    💾 Zarejestruj firmę
                </button>
            </div>
        </form>
    </div>
</body>
</html>
