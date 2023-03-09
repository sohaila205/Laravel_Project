<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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

Route::get('/',[PostController::class,'index']);



 Route::get('posts/{post}' ,[PostController::class,'show']);
 
 Route::get('postcontent', function () {
    return view('postcontent');
});



Route::get('categories/{category:name}' , function(Category $category){

    return view('post',[
        'post' => $category->post
    ]);

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