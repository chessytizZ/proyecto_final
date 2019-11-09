<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Video;
use App\Genero;

class VideoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function individual($id)
    {
        $video = Video::find($id);
        $parametros = [
            'video' => $video
        ];

        return view ('video',$parametros);
    }

    public function register(Request $request)
    {
        $video= new Video;//se creo un nuevo video

        $video->title = $request->input('nombre');//se le asigno el nombre recibido del formulario

        $video->url = $request->input('url');//se le asigno el url recibido del formulario

        $video->user_id =  \Auth::user()->id;

        $video->save();//se registro el nuevo video

        $genero = Genero::find( $request->input('genero') );

        $genero->posts()->save($video);

        return redirect()->route('succes',['message' => 'El video se ha creado exitosamente']);
    }

    public function editar_form($id)
    {
        $video = Video::find($id);
        $this->authorize('owner',$video);
        $genero = Genero::all();
        $parametros = [
            'video' => $video,
            'generos' => $genero
        ];

        return view ('form_editar_video',$parametros);;

    }

    public function editar(Request $request)
    {
        $video = Video::find($request->input('id'));

        $this->authorize('owner',$video);

        $video->title = $request->input('nombre');

        $video->url = $request->input('url');

        $video->save();

        if($request->input('genero_anterior') != "nulo"){
            $genero = Genero::find( $request->input('genero_anterior') );
            $genero->videos()->detach($video);
        }

        $genero_nuevo = Genero::find( $request->input('genero'));

        $genero_nuevo->videos()->save($video);

        return redirect()->route('succes', ['message' => 'El video se ha editado exitosamente']);

    }


    public function eliminar($id){
        $video = Video::find($id);
        $this->authorize('owner',$video);
        $genero = Genero::find($video->generos[0]->id);
        $genero->posts()->detach($video);
        $video->delete();
        return redirect()->route('succes', ['message' => 'El video se ha eliminado exitosamente']);
    }
}
