<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
    
    return view('posts',[
    'posts' =>Post::latest()->filter(request(['search', 'category']))->get()
     //$this->getPosts()
    
    ]); }

    public function show(Post $post){

        return view('post',[
            'post' => $post
        ]);
    }

    // public function getPosts(){
    //     return Post::latest()->filter()->get();

    // }



public function filter(Request $request){
    $post = Post::query()->with('category');
if ($request->categories) {
    $post->whereHas('category', function ($query) use ($request) {
        $query->where('category_id', $request->categories);
    });
}
$post = $post->get();
$categories = Category::all();
return view('posts')->with([
    'post' => $post,
    'categories' => $categories]);
}

}




?>