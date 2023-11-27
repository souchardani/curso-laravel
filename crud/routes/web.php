<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;



















//para pasar parametros a las rutas, hacemos uso de las llaves y dentro ponemos el parametro que vamos a necesitar
//si queremos decir que el parametro es opcional, lo escribimos asi {id?}

//las rutas tienen una importacia de arriba a abajo, asi que la ruta example nunca se ejectuaria
// Route::get('/note/{id}', [NoteController::class, 'index']) ->name("note.index");
// Route::get('/note/hello', [NoteController::class, 'example']) ->name("note.example");
