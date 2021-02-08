<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
    //use HasFactory;
    protected $guarded = ['id'];

    protected static function boot()        //sobreescribimos boot
    {
        parent::boot();
        if(!app()->runningInConsole()){
            self::creating(function($table){
                $table->user_id=auth()->id();       //inserta automaticam el id del usuario log cuando se guarde el post
            });
        }
    }


}
