<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

    // Polymorphic one to one
    // public function image(){
    //     return $this->morphOne('App\Image', 'imageable');
    // }

    // Polymorphic many to many
    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
