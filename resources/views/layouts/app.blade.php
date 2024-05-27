<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Gaming</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('postingans.index') }}">Postingan</a>
            <a href="{{ route('traktirkopis.index') }}">Traktir Kopi</a>
            <a href="{{ route('diskusis.index') }}">Diskusi</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        2024@Kel1
    </footer>
</body>
</html>
