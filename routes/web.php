<?php

// use the model Post
// use App\Post;
// use App\User;
use Illuminate\Http\Request;
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
// Route::get('/admin', function(){
//     return 'Hello ADMIN';
// })->middleware('auth');


// Route::get('/admin', ['middleware' => 'isAdmin', function(){
//     return redirect('/home');
// }]);

// MIDDLEWARE MULTIPLE ROUTES
// ORDER IS IMPORTANT
// Route::middleware(['isAdmin', 'another', 'thirdone'])->group(function(){
//     Route::get('/admin', function(){
//         return redirect('/home');
//     });
//     Route::get('/admin/dashboard', function(){
//         return redirect('/home');
//     });
// });

// DIFFERENT WAY OF MULTIPLE ROUTES

Route::resource('/admin', 'AdminController');

// Route::get('/', function(Request $request){
    // SESSIONS AND FLASH MESSAGES
    
    // $request->session()->put('Mode', 'Awesome');
    // $request->session()->put('Days', ['1', '2', '3']);
    // $request->session()->put('Mode', 'SUPER AWESOME');
    // $request->session()->push('Days', '4');
    // $request->session()->get('Mode');
    // $request->session()->forget('Days');

    // session(['Mode' => 'ULTRA AWESOME']);
    // session(['Days' => ['x']]);
    // $request->session()->flash('Greeting', 'Hello Guys!');
    // $request->session()->reflash();
    // $request->session()->keep(['Greeting']);


    // return $request->session()->all();

// });

    //  CUSTOM MIDDLEWARES

// Route::get('/', function(){
//     $user = Auth::user();

//     return $user;
// });

// Route::get('/admin', ['middleware' => 'awesome', function(){
//     return 'nothing';
// }]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
