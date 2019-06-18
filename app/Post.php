<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

    // HAS TO START WITH GET and end with ATTRIBUTE, ACCESSOR
    // BEFORE entering the frontend
    public function getTitleAttribute($value){
        return strtoupper($value);
    }

    // HAS TO START WITH SET and end with ATTRIBUTE, MUTATOR
    // BEFORE entering the db
    public function setTitleAttribute($value){
        $this->attributes['title'] = strtoupper($value);
    }
}
