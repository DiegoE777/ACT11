<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .menu { display: flex; gap: 20px; list-style: none; padding: 0; }
        .menu li { padding: 10px; }
        .menu li.active { font-weight: bold; text-decoration: underline; }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ request()->routeIs('photos') ? 'active' : '' }}"><a href="{{ route('photos') }}">Photos</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Created by [Tu Nombre]</p>
    </footer>
</body>
</html>
