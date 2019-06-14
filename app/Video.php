<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    // Polymorphic many to many
    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
