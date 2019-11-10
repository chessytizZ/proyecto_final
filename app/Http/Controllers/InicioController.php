<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;
use App\Post;
use App\Video;

class InicioController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $post = Post::all();
        $video = Video::all();
        $genero = Genero::all();

        $parametros = [
            'posts' => $post,
            'videos' => $video,
            'generos' => $genero
        ];

        return view('inicio' , $parametros );
    }
    
    public function succes($message)
    {
        dump($message);
        $post = Post::all();
        $video = Video::all();
        $genero = Genero::all();

        $parametros = [
            'posts' => $post,
            'videos' => $video,
            'generos' => $genero
        ];

        return view('inicio' , $parametros );
    }

    public function action(Request $request){

        switch($request->input('accion')){

            case 'crear':

                switch($request->input('entidad')){

                    case 'post':

                        $genero = Genero::all();

                        $parametros = [
                            'generos' => $genero
                        ];

                        return view('formulario_post', $parametros );

                        break;

                    case 'video':
                        $genero = Genero::all();

                        $parametros = [
                            'generos' => $genero
                        ];
                        return view('formulario_video', $parametros );
                        break;

                    case 'genero':
                        return view('formulario_genero');
                        break;
                }

                break;

            case 'editar':
                switch($request->input('entidad')){
                    case 'post':
                        $id_user = \Auth::user()->id;
                        $post = Post::where('user_id',$id_user)->get();

                        $parametros = [
                            'posts' => $post
                        ];
                        return view('editar_post', $parametros );
                        break;

                    case 'video':
                        $id_user = \Auth::user()->id;
                        $video = Video::where('user_id',$id_user)->get();

                        $parametros = [
                            'videos' => $video
                        ];
                        return view('editar_video', $parametros );
                        break;

                    case 'genero':

                        $genero = Genero::all();

                        $parametros = [
                            'generos' => $genero
                        ];
                        return view('editar_genero', $parametros );
                        break;
                }
                break;

            case 'eliminar':
                switch($request->input('entidad')){
                    case 'post':
                         $id_user = \Auth::user()->id;
                        $post = Post::where('user_id',$id_user)->get();

                        $parametros = [
                            'posts' => $post
                        ];
                        return view('eliminar_post', $parametros );
                        break;

                    case 'video':
                        $id_user = \Auth::user()->id;
                        $video = Video::where('user_id',$id_user)->get();

                        $parametros = [
                            'videos' => $video
                        ];
                        return view('eliminar_video', $parametros );
                        break;

                    case 'genero':

                        $genero = Genero::all();

                        $parametros = [
                            'generos' => $genero
                        ];
                        return view('eliminar_genero', $parametros );
                        break;
                }
                break;
                break;
        }

    }
}
