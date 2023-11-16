<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @yield('styles')
    <title>
        {{-- yield indica que esta parte del codigo se va a externder y habra contenido custom --}}
        {{-- debemos dar un nombre para acceder a ella a posteriori --}}
        {{-- es una directiva para indicar al layout que debe esperar a la inyeccion de contenido --}}
        @yield("title")
    </title>
</head>
<body>
    {{-- para incluir el contenido del menu, usamos include. es diferente de extends ya que no va a extender la planitlla, solo la va a incluir --}}
    @include("layouts._partials.menu")
    @yield("content")
    @yield("scripts")
</body>
</html>
