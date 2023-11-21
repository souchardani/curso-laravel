<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    //sobreescribir conexion con tabl con el sistema de persistencia cuando no usamos la convecion de nombres
    //protected $table = "tareas";
    //sirve para indicar que campos del objeto pueden ser cumplimentables
    protected $fillable = ["title", "description", "deadline", "done"];
    //contrario a fillable. marcamos los campos que queremos proteger, tampoco es necesario ya que son contrapuestos con fillable
    protected $guarded ="";
    //forzar casteo de datos
    protected $casts =["deadline" => "date"];
    //evitar entregar datos cuando serializamos contenido (por ejemplo en api al entregar elementos como datos de user y no entregar password)
    protected $hidden =["password", "otros valores protegidos"];
}

//por cada modelo que creamos, vamos a necesitar crear una migracion que equipare al modelo
//la sintaxis corta para crear modelo y migracion a la vez es: php artisan make:model Author --migration

/*
$note = new Note();
$note->title("Hello World");
$note->descriptcion("lorem ipsum");
$note->save();

Note::get();
*/
