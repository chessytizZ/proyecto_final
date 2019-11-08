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
        return view('inicio');
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
                    
                        $post = Post::all();

                        $parametros = [
                            'posts' => $post
                        ];
                        return view('editar_post', $parametros );
                        break;                    
                    
                    case 'video':
                    
                        $video = Video::all();

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
                    
                        $post = Post::all();

                        $parametros = [
                            'posts' => $post
                        ];
                        return view('eliminar_post', $parametros );
                        break;                    
                    
                    case 'video':
                    
                        $video = Video::all();

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
