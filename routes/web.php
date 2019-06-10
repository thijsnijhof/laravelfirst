<?php

// use the model Post
use App\Post;
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

// Route::get('/', function () {
//     return "Hello guys!";
// })->name('home');

// Route::get('/contact', 'ContactController@index');

// Route::view('/contact', 'contact', ['name'=> 'Francis'])->name('contact');
// Route::redirect('/', '/contact');

// Route::get('/user/{name}/{id}', function($name,$id){
//     return 'i am '.$name.' and my id is '.$id;
// });

// Route::resources([
//     'contact' => 'ContactController', 
//     'user' => 'UserController'
// ]);

// Route::resource('contact', 'ContactController');

// Route::resource('contact', 'ContactController')->only([
//     'index', 'show'
// ]);

// Route::get('/contact/{user}/{age}/{name}', 'ContactController@index');

// Route::resource('contact', 'ContactController')->except([
//     'create','store', 'update','destroy'
// ])->names([
//     'edit' => 'contact.superawesome'
// ]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/posts/{id}', function($id){
    
    // $post = Post::find($id);

    // $post = Post::all();

    // $post = Post::orderBy('id', 'desc')->get();

    // $post = Post::where('is_admin', 1)->get();

    // $post = Post::where('is_admin', 1)
    // ->where('votes', 5)
    // ->get();

    // $post = Post::all()->first();

    $post = Post::find([$id, 1])->take(2);

    return $post;
});