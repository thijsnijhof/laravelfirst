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
    // Make sure you set these properties for the model
    protected $fillable = ['name', 'username', 'email', 'password', 'contact',];

    public function role(){
        return $this->belongsTo('App\Role');
    }
}
