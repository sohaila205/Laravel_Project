<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
    
    return view('posts',[
    'posts' =>Post::latest()->filter(request(['search']))->get()
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







}





?>