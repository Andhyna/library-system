<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Perpustakaan')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        header { background: #2c3e50; color: #fff; padding: 20px; text-align: center; }
        nav { background: #34495e; padding: 10px; }
        nav a { color: #ecf0f1; text-decoration: none; margin: 0 15px; }
        nav a:hover { text-decoration: underline; }
        main { padding: 20px; max-width: 1000px; margin: 0 auto; }
        footer { background: #2c3e50; color: #bdc3c7; text-align: center; padding: 15px; margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #2c3e50; color: #fff; }
        .status-tersedia { color: green; font-weight: bold; }
        .status-habis { color: red; font-weight: bold; }
        .stat-box { display: inline-block; background: #fff; padding: 20px; margin: 10px; width: 30%; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; }
        .stat-box h3 { color: #2c3e50; font-size: 2em; }
        .stat-box p { color: #7f8c8d; }
    </style>
</head>
<body>
    <header>
        <h1>Sistem Informasi Perpustakaan</h1>
    </header>

    <nav>
        <a href="/dashboard">Dashboard</a>
        <a href="/books">Books</a>
        <a href="/categories">Categories</a>
        <a href="/members">Members</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Sistem Informasi Perpustakaan - Tugas Praktikum Pertemuan 6</p>
    </footer>
</body>
</html>
