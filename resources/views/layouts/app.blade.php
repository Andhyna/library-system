<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Perpustakaan')</title>
</head>
<body>
    <header>
        <h1>Sistem Informasi Perpustakaan</h1>
    </header>

    <nav>
        <a href="{{ route('home') }}">Dashboard</a>
        <a href="{{ route('books.index') }}">Books</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('members.index') }}">Members</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Sistem Informasi Perpustakaan - Tugas Praktikum Pertemuan 7</p>
    </footer>
</body>
</html>
