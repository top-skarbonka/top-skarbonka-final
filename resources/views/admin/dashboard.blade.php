<!DOCTYPE html>
<html>
<head>
    <title>Panel Admina</title>
</head>
<body>
    <h1>Witaj w panelu admina 🎉</h1>

    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit">Wyloguj</button>
    </form>
</body>
</html>
