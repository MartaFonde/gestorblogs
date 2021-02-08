<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //use HasFactory;
    protected $guarded =['id'];     //para que no se pueda introducir un  id desde fuera

    public function posts()
    {
        return $this->hasMany(Post::class);     //indica que en cada blog hay varios post
    }
    
}
