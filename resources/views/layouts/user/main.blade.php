<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased" style="background-image: url('/img/bg-main.jpg')">
@include('layouts.user.header')
<div class="container mx-auto">
    @isset($links)
        <x-breadcrumbs :links="$links"></x-breadcrumbs>
    @endisset
    @yield('content')
</div>
@stack('scripts')
</body>
</html>
