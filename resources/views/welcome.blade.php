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
    <body class="antialiased"  style="background-image: url('/img/bg-main.jpg')">
    <div class="relative h-64">
        <div class="h-64 w-full absolute flex">
            <img class="h-full" src="{{URL::asset('/img/col-1.png')}}" alt="header">
            <img class="h-full" src="{{URL::asset('/img/col-2.png')}}" alt="header">
            <img class="w-full" src="{{URL::asset('/img/col-3.png')}}" alt="header">
        </div>
        <div class="container mx-auto">
            <div class="absolute top-2/4">
                <h1 class="text-2xl">Университет Шакарима</h1>
                <h1 class="text-2xl">МУЗЕЙ</h1>
            </div>
        </div>
    </div>
    <div class="bg-amber-100">
        <div class="h-8 bg-contain" style="background-image: url('/img/line.png')">
        </div>
    </div>
    </body>
</html>
