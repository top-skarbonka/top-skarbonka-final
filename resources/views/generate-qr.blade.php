<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generuj swój kod QR – Top Skarbonka</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center" 
      style="background: linear-gradient(135deg, #7F00FF, #E100FF);">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md text-center">
        <!-- LOGA -->
        <div class="flex justify-center mb-6 space-x-4">
            <img src="http://top-price.com.pl/wp-content/uploads/2024/10/logo-1.png" 
                 alt="Top Price" class="h-16">
            <img src="http://top-price.com.pl/wp-content/uploads/2025/09/top-skarbonka.png" 
                 alt="Top Skarbonka" class="h-16">
        </div>

        <!-- Nagłówek język korzyści -->
        <h2 class="text-2xl font-bold text-gray-800 mb-3">Dołącz do Top Skarbonki 🎉</h2>
        <p class="text-gray-600 mb-6">
            Generuj swój unikalny <b>kod QR</b> i zbieraj <b>Top Points</b> za codzienne zakupy.  
            Podaj swój numer telefonu i zgarnij dodatkowe <b>100 punktów w prezencie 🎁</b>.
        </p>

        <!-- Formularz -->
        <form method="POST" action="{{ route('client.generateQr.submit') }}" class="space-y-5">
            @csrf

            <div class="text-left">
                <label class="block text-sm font-medium mb-1">Adres e-mail*</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="text-left">
                <label class="block text-sm font-medium mb-1">Kod pocztowy*</label>
                <input type="text" name="postal_code" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="text-left">
                <label class="block text-sm font-medium mb-1">Numer telefonu (opcjonalnie)</label>
                <input type="tel" name="phone"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                       placeholder="+48 123 456 789">
                <small class="text-gray-500">🎁 Podaj numer i zgarnij 100 punktów gratis!</small>
            </div>

            <button type="submit" 
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-semibold transition">
                Generuj kod QR 🚀
            </button>
        </form>
    </div>
</body>
</html>

