<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nunez Album')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- HEADER --}}
    <header class="site-header">
        <h1 class="title">Nunez Album</h1>
        <nav class="page-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('page1') }}">Page 1</a>
            <a href="{{ route('page2') }}">Page 2</a>
            <a href="{{ route('page3') }}">Page 3</a>
            <a href="{{ route('page4') }}">Page 4</a>
            <a href="{{ route('page5') }}">Page 5</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>💕 2025 — Wrenzyehl Mardy Nunez — A3 💕</p>
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
