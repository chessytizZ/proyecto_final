<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;


class GeneroController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function register(Request $request)
    {

        $genero = new Genero;
        $genero->type = $request->input('nombre');
        $genero->save();
        return redirect()->route('succes', ['message' => 'El genero se ha creado exitosamente']);
    }

    public function editar_form($id){

        $genero = Genero::find($id);
        $parametros = [
            'genero' => $genero
        ];

        return view ('form_editar_genero',$parametros);

    }

    public function editar(Request $request){

        $genero = Genero::find($request->input('id'));

        $genero->type = $request->input('nombre');

        $genero->save();

        return redirect()->route('succes', ['message' => 'El genero se ha editado exitosamente']);

    }

    public function eliminar($id){
        $genero = Genero::find($id);
        $genero->posts()->detach();
        $genero->videos()->detach();
        $genero->delete();

        return redirect()->route('succes', ['message' => 'El genero se ha eliminado exitosamente']);
    }
}
