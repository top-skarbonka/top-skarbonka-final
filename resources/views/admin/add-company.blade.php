<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj firmę</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-700">

    <div class="bg-white rounded-xl shadow-2xl p-10 w-full max-w-3xl">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Dodaj nową firmę</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.companies.store') }}" class="grid grid-cols-2 gap-6">
            @csrf

            <!-- Nazwa firmy -->
            <div class="col-span-2">
                <label class="block text-sm font-medium">🏢 Nazwa firmy</label>
                <input type="text" name="name" class="w-full border rounded-lg p-2 mt-1" required>
            </div>

            <!-- Kod pocztowy -->
            <div>
                <label class="block text-sm font-medium">📮 Kod pocztowy</label>
                <input type="text" name="postal_code" pattern="[0-9]{2}-[0-9]{3}" placeholder="00-000" class="w-full border rounded-lg p-2 mt-1 tracking-widest" required>
            </div>

            <!-- Miasto -->
            <div>
                <label class="block text-sm font-medium">🌆 Miasto</label>
                <input type="text" name="city" class="w-full border rounded-lg p-2 mt-1" required>
            </div>

            <!-- Ulica i nr -->
            <div class="col-span-2">
                <label class="block text-sm font-medium">🏠 Ulica i nr</label>
                <input type="text" name="address" class="w-full border rounded-lg p-2 mt-1" required>
            </div>

            <!-- NIP -->
            <div>
                <label class="block text-sm font-medium">🧾 NIP</label>
                <input type="text" name="nip" maxlength="10" pattern="[0-9]{10}" placeholder="__________" class="w-full border rounded-lg p-2 mt-1 tracking-[0.5em]" required>
            </div>

            <!-- Telefon -->
            <div>
                <label class="block text-sm font-medium">📞 Telefon</label>
                <input type="text" name="phone" class="w-full border rounded-lg p-2 mt-1">
            </div>

            <!-- Email (login) -->
            <div>
                <label class="block text-sm font-medium">📧 Email (login)</label>
                <input type="email" name="email" class="w-full border rounded-lg p-2 mt-1" required>
            </div>

            <!-- Przelicznik -->
            <div>
                <label class="block text-sm font-medium">💰 Przelicznik zł → Top Points</label>
                <input type="number" step="0.01" name="exchange_rate" class="w-full border rounded-lg p-2 mt-1" required>
            </div>

            <!-- Przycisk -->
            <div class="col-span-2 text-center">
                <button type="submit" class="bg-gradient-to-r from-blue-600 to-purple-700 text-white px-6 py-3 rounded-lg shadow-md hover:opacity-90">
                    ➕ Dodaj firmę
                </button>
            </div>
        </form>
    </div>

</body>
</html>
