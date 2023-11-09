<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TanzaWHM - @yield('title', 'TanzaWHM')</title>

    <!-- Include CSS stylesheets here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <main>
        @yield('master')
    </main>

    <!-- Include JavaScript files here -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

