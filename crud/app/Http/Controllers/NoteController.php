<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{

    public function index(){
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(){
        return view('note.create');
    }

    //al ser una ruta post, esta ruta envia una peticion, y con el request obtenemos los datos de esta peticion
    public function store(NoteRequest $request){
        // ****PRIMERA MANERA DE AÑADIR A BASE DE DATOS (SE PUEDE USAR PARA MANIPULAR LOS DATOS)
        // $note = new Note;
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        //******SEGUNDA MENRA DE AÑADIR A BD */
        // Note::create([
        //     'title'->$request->title,
        //     "description"->$request->description
        // ]);

        //*******TERCERA MANERA SI LOS DATOS DEL FORMULARION SE LLAMAN IGUAL A LOS DE EL MODELO */
        // $request->validate([
        //     'title'=>'required|max:255|min:3',
        //     'description'=>'required|max:255|min:3',
        // ]);
        Note::create($request->all());
        return redirect()->route("note.index")->with("success", "Note created");
    }

    //al poner Note $note, laravel busca el id que le estamos pasando como $note y encuentra la Note asociada a el
    public function edit(Note $note){
        return view("note.edit", compact("note"));
    }

    public function update(NoteRequest $request, Note $note){
        $note->update($request->all());
        return redirect()->route('note.index')->with("success", "Note updated");;

        //********otra manera es
        // $note->update([
        //     "title"=> $request->title,
        //     "description"=> $request->description
        // ]);

        //y si no pasamos la nota por url, decimos
        // $note = Note::find($note);
        // $note->title = $request->title;
        // $note->description= $request->description;
        // $note->save();
    }

    public function show(Note $note){
        return view("note.show", compact('note'));
    }

    public function destroy(Note $note){
        $note->delete();
        return redirect()->route("note.index")->with("danger", "Note deleted");;
    }




    // public function index($id = null) {
    //     //al poner el id como parametro de la funcion, podemos acceder a esa informacion que viene de la ruta
    //     return view('note.index', compact('id'));

    // }
}
