<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post_file 
{
 
    public static function all(){
        return File::files(resource_path("posts/"));
    }
    public static function find($slug){
        $post = resource_path("/posts/{$slug}.html");

        if( !file_exists($post))
        {
           return redirect('/');
        }
        
        return view('postcontent',[
           'post' =>$post]);
    }
}
