<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public function posts(){
        return $this->morphedByMany(Post::class, 'pertenece');
    }
    public function videos(){
        return $this->morphedByMany(Video::class, 'pertenece');
    }

}
