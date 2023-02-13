<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([ 'resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.ts'])
    <title>{{ $title }}</title>
</head>

<body>
    @include("layouts.navegador.navegador")
    <main class="container">
        @yield('content')
    </main>
</body>

</html>
