<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        //obtenemos todos los elementos de usuarios usando los metodos estaticos del orm eloquent
        //eloquient permite concatenar las peticiones de datos
        //all()->trae todos los datos,
        $users = User::all();



        //para devolver una vista desde el controlador, debemos indicar un return view y entre parentesis el nombre de la ruta de la vista desde views
        //tambien podemos pasar datos a la vista mediante un array asociativo
        //si la clave se llama igual que la variable, podemos omitir la sintaxis larga("users" => $users) por el metodo compact;
        //el metodo compact nos dice que la clave de acceso del array sera el mismo que el nombre de la variable
       return view("user.index", compact('users'));
    }
}
