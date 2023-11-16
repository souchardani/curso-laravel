{{-- directiva de blade --}}
{{-- recuerda que para las vistas la ruta parte de views --}}
@extends('layouts.landing')
{{-- como esa estructura tiene 2 zonas para inyectar conttenido, podemos hacerlo con @section --}}
{{-- @section tiene 2 parametros, el nombre de la zona y el contenido, puede ser separado con comas, o para contenido html,
    usamos end section y dentro ponemos todo el contenido --}}
{{-- las secciones son opcionales, no es obligatorio cumplimentarlas --}}
@section("title", "Home")
@section("content")
    <h1>Index</h1>
@endsection
