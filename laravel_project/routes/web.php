<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('posts',[
    'posts' => Post::all()
]);
});

 Route::get('posts/{post}' , function(Post $post){

    $post =Post::find($post);
    return view('post',[
        'post' => $post
    ]);

 });
 Route::get('postcontent', function () {
    return view('postcontent');
});

/* 
Route::get('post', function () {
    return view('post',['post' =>'<h1>posts</h1>']
);
});
Route::get('postcontent/{post}', function ($slug) {
    $post = file_get_contents(__DIR__. "/../resources/posts/{$slug}.html");

    if( !file_exists($post))
    {
       return redirect('/');
    }
    
    return view('postcontent',[
       'post' =>$post]);
})->whereAlpha('post');  */