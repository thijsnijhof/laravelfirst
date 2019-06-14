<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // // establish a relationship
    // public function post(){
    //     // return $this->hasOne('App\Post', 'xxx_id', 'name');
    //     return $this->hasOne('App\Post');

    // }
    // // get more posts 
    // public function posts(){
    //     return $this->hasMany('App\Post');
    // }

    //  ROLES many to many
    // public function roles(){
    //     return $this->belongsToMany('App\Role');
    // }

    // POLYMORPHIC RELATIONSHIP
    public function image(){
        return $this->morphOne('App\Image', 'imageable');
    }
}
