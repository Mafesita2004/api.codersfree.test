<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const BOORADOR=1;
    const PUBLICADO=2;
    //Relacion Uno a Muchos (Inversa) con Category
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

     //Relacion Uno a Muchos (Inversa) con User
     public function user(){
        return $this->belongsTo('App\Models\user');
    }
    //Relacion muchos a muchos
    public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

    //Relacion uno a muchos polimorfica
    public function images (){
        return $this->morphMany(image::class,'imageable');
    }
}
