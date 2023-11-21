<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//para asociar una ruta a un controlador, es esta sintaxis
//get se una de manera por defecto para pintar vistas
//hay que pasar un array de dos valores: valor 1 la clase del controlador a usar,
//valor 2 el metodo del controlador que maneja la vista
Route::get('/', [UserController::class, 'index'])->name('user.index');
