 {{-- <!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <link rel="stylesheet" href="/app.css">
   <title>project</title>
   <body>
    hello world

    
    <article>
    </article>
    <article>
        <h1><a href="/post">2nd post </a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque omnis suscipit ducimus modi ea magnam doloribus cumque fugiat, illum consequatur excepturi dolores aut totam facere velit ex. Ex, veritatis consectetur?</p>
    </article>
   </body>
</html> 
 --}}
 @extends('components.layout')
 @section('content')
 <?php foreach ($posts as $post) : ?>

 <article>
    {{$post->title}}
    {{$post->body}}

    {{--  < ?=// $post ; ? > --}}
 </article>
   <?php endforeach ;?>

 @endsection