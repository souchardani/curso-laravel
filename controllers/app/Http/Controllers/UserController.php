<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index() {
        //obtenemos todos los elementos de usuarios usando los metodos estaticos del orm eloquent
        //eloquient permite concatenar las peticiones de datos
        //all()->trae todos los datos,
        //where : ponemos las condiciones a evaluar
        //get()luego de poner las condiciones, los tramos
        //orderBy, limit, etc son condiciones a usar
        //first-> traemos solo el primer dato
        //$users = User::where('age', ">=", 30)->first();
        //PLANTILLA BASICA: $User::where()->orWhere()->orderBy->linit()->get();
        //traer solo un usuario por id, find(id)
        //$users = User::all();

        //para otr tipo de consultas sin usar elquient, usamos la clase db de laravel
        // $age = 30;
        // $users = DB::select( DB::raw("select * from users where age = '$age'") );



        //para devolver una vista desde el controlador, debemos indicar un return view y entre parentesis el nombre de la ruta de la vista desde views
        //tambien podemos pasar datos a la vista mediante un array asociativo
        //si la clave se llama igual que la variable, podemos omitir la sintaxis larga("users" => $users) por el metodo compact;
        //el metodo compact nos dice que la clave de acceso del array sera el mismo que el nombre de la variable
       return view("user.index", compact('users'));
    }

    public function create(){
        $user = new User;
        $user -> name = "juanjo";
        $user -> email = "demo@demo.com";
        $user -> password = Hash::make('123456');
        $user -> age = 25;
        $user -> address = "Calle demostracion 12";
        $user -> zip_code = 290909;
        //cuando tenemos el objeto completo y listo para guardar en el orm, usamos el metodo save
        $user -> save();

        //este metodo nos permite crear un usuario y guardarlo directamente en la bbdd
        User::create([
            "name" => "Ruiz",
            "email" => "info@demo.com",
            "password" => Hash::make("123345345"),
            "age" => 42,
            "address" => "Avenida de pruebas 17",
            "zip_code" => 280808
        ]);

        User::create([
            "name" => "alejandro",
            "email" => "info2@demo.com",
            "password" => Hash::make("123345345"),
            "age" => 76,
            "address" => "Avenida de pruebas 23",
            "zip_code" => 280808
        ]);

        //El metodo de un controlador siempre tiene que retornar algo
        return redirect()->route("user.index");
    }
}
