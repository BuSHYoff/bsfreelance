<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="@yield('cssFile')">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>BSfreelance - @yield('title')</title>
</head>
<body>
    <div class="content">
        @yield('content')
    </div>
<footer>
    <div class="footer-copyright text-center">&copy; Developpé avec ❤️</i> par
        <a href="/" class="white-text" target="_blank">B Salaud</a> -
        <a href="privacyNoticy">Mentions légales</a>
    </div>
</footer>
</body>
</html>
