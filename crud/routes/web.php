<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;



    Route::get("/note", [NoteController::class, 'index'])->name('note.index');
    Route::get("/note/create", [NoteController::class, "create"])->name("note.create");
    Route::post("/note/store", [NoteController::class, "store"])->name("note.store");
    Route::get("/note/edit/{note}", [NoteController::class, "edit"])->name("note.edit");
    Route::put("/note/update/{note}", [NoteController::class, "update"])->name("note.update");
    Route::get("note/show/{note}", [NoteController::class, "show"])->name("note.show");
    Route::delete("/note/destroy/{note}", [NoteController::class, "destroy"])->name("note.destroy");


    // //esta es una abrebiación de todo lo de arriba (resource es un conjunto de rutas)
     Route::resource("/post", PostController::class);


    //para ver todas las rutas del proyecto la directiva es php artisan route:list











//para pasar parametros a las rutas, hacemos uso de las llaves y dentro ponemos el parametro que vamos a necesitar
//si queremos decir que el parametro es opcional, lo escribimos asi {id?}

//las rutas tienen una importacia de arriba a abajo, asi que la ruta example nunca se ejectuaria
// Route::get('/note/{id?}', [NoteController::class, 'index']) ->name("note.index");
// Route::get('/note/hello', [NoteController::class, 'example']) ->name("note.example");
