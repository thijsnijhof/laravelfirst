<?php

// use the model Post
use App\Post;
use App\User;
use App\Country;
use App\Video;
use App\Tag;
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

// One to One user->post

// Route::get('/user/{id}', function($id){
//     // has one
//     // return User::find($id)->post;

//     // hasmany
//     return User::find($id)->posts;
// });

// Route::get('/posts/{id}', function($id){
//     return Post::find($id)->user->name;
// });

// Many to many, roles

// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id);
//     foreach($user->roles as $user_role){
//         echo $user_role->name;
//     }
//     // return User::find($id)->roles->name;
// });

// HAS MANY THROUGH
// Route::get('/user/{id}/country', function($id){
//     $country = Country::find($id);

//     foreach($country->posts as $post){
//         echo $post->title.'<br/>';
//     }
// });

// Polymorphic One to One
// Route::get('/user/image', function(){
//     return User::find(1)->image;
// });

// Route::get('/post/image', function(){
//     return Post::find(1)->image;
// });

// Polymorphic Many to Many
// Route::get('/post/tag', function(){
//     $post = Post::find(1)->tags;

//     return $post;
// });

// Route::get('/video/tag', function(){
//     $video = Video::find(1)->tags;

//     return $video;
// });

// Polymorphic many to many reverse
Route::get('/tag/post', function(){
    $post = Tag::find(1)->posts;
    return $post;
});
Route::get('/tag/videos', function(){
    $videos = Tag::find(1)->videos;
    return $videos;
});