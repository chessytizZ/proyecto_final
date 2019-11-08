<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function generos(){
        return $this->morphToMany('App\Genero', 'pertenece');
    }
}
