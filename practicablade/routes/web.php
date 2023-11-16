<?php

use Illuminate\Support\Facades\Route;

//creamos las rutas de la pagina
Route::view('/', 'index') -> name("index");
Route::view('/frases', 'frases') -> name("frases");
Route::view('/contacto', 'contacto') -> name("contacto");
Route::view('/nosotros', 'nosotros') -> name("nosotros");
Route::view('/login', 'login') -> name("login");
