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

    // $post = Post::find([$id, 1])->take(2);

    // SAVE
    // $post = new Post;
    // $post->title = 'Netherlands is awesome';
    // $post->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt expedita quas odit esse beatae facilis ad, quod voluptatum atque, cum aliquam temporibus animi ut at mollitia veritatis delectus quasi tenetur.';
    // $post->votes = 5;
    // $post->is_admin = 1;
    // $post->save();

    // UPDATE
    // $posts = Post::find(1);
    // $posts->title = 'Awesome Titans';
    // $posts->save();

    // MASS UPDATE
    // $posts = Post::where('is_admin',1)->update([
    //     'votes' => 100
    // ]);

    // MASS ASSIGNMENT
    // Add these to fillables in Model
    // Post::create([
    //     'title' => 'Mass Assignment',
    //     'body' => 'Content fake',
    //     'votes' => 99,
    //     'is_admin' => 1
    // ]);

    // DELETE
    // if you want to find one
    // $post = Post::find(4);
    // $post->delete();

    // if you know which one
    // Post::destroy(3);

    // delete multiple
    // Post::destroy([1,2,3]);

    // return $post;

    // Softdelete
    // add softdelete in migration
    // use the method in the model

    // $post = Post::find(6);
    // $post->delete();

    // wont show deleted_at
    // $post = Post::all();

    // also show deleted_at
    // $post = Post::withTrashed()->get();

    // only softdeleted
    // $post = Post::onlyTrashed()->get();

    // delete trashed posts
    $post = Post::onlyTrashed()
        ->where('id', 6)
        ->forceDelete();
    
    // return $post;
});