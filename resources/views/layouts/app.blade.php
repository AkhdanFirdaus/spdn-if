<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pengolaan Data Mahasiswa IF</title>
    <link rel="stylesheet" href="/css/app.css">
    @stack('styles')
</head>

<body>
    @yield('content')
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>

</html>
