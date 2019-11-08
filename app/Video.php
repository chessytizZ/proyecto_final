<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function generos(){
        return $this->morphToMany('App\Genero', 'pertenece');
    }
}
