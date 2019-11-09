<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Genero;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function individual($id)
    {
        $post = Post::find($id);
        $parametros = [
            'post' => $post
        ];

        return view ('post',$parametros);

    }

    public function register(Request $request)
    {
        $post= new Post;//se creo un nuevo post

        $post->title = $request->input('nombre');//se le asigno el nombre recibido del formulario

        $post->body = $request->input('contenido');//se le asigno el contenido recibido del formulario

        $post->user_id =  \Auth::user()->id;

        $post->save();//se registro el nuevo post

        $genero = Genero::find( $request->input('genero') );

        $genero->posts()->save($post);

        return redirect()->route('succes', ['message' => 'El post se ha creado exitosamente']);
    }

    public function editar_form($id){

        $post = Post::find($id);

        $this->authorize('owner',$post);

        $genero = Genero::all();

        $parametros = [
            'post' => $post,
            'generos' => $genero
        ];

        return view ('form_editar_post',$parametros);

    }

    public function editar(Request $request){

        $post = Post::find($request->input('id'));

        $this->authorize('owner',$post);

        $post->title = $request->input('nombre');

        $post->body = $request->input('contenido');

        $post->save();

        if($request->input('genero_anterior') != "nulo"){
            $genero = Genero::find( $request->input('genero_anterior') );
            $genero->posts()->detach($post);
        }

        $genero_nuevo = Genero::find( $request->input('genero'));

        $genero_nuevo->posts()->save($post);

        return redirect()->route('succes', ['message' => 'El post se ha editado exitosamente']);

    }

    public function eliminar($id)
    {
        $post = Post::find($id);
        $this->authorize('owner',$post);
        $genero = Genero::find($post->generos[0]->id);
        $genero->posts()->detach($post);
        $post->delete();
        return redirect()->route('succes', ['message' => 'El post se ha eliminado exitosamente']);
    }
}
