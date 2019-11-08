<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Video;
use App\Genero;


class TareadosController extends Controller
{
    public function create()
    {
        $post = Post::all();
        $video = Video::all();
        $genero = Genero::all();

        $parametros = [
            'posts' => $post,
            'videos' => $video,
            'generos' => $genero
        ];

        return view( "tareados.form" , $parametros );
    }

}
