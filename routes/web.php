<?php

// use the model Post
use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

// go through the middleware first for validation to show the errors with global variables
Route::group(['middleware' => 'web'], function(){
    Route::resource('/posts', 'PostsController');
});
