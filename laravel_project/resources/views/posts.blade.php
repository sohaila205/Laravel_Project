 {{-- <!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <link rel="stylesheet" href="/app.css">
   <title>project</title>
   <body>
    hello world

    
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
 @include('_posts_header')
 {{-- < ?php foreach ($posts as $post) : ? >

 <article>
     {{$post->title}}
    {{$post->body}}
    { $post->category->slug}

      < ?=// $post ; ? > 
 </article>
   //< ?php endforeach ;?>

 @endsection --}}
 

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    
   <x-post_featured_card :post="$post[0]" />

    <div class="lg:grid lg:grid-cols-2">
    @foreach ($post as $post )
    <x-post_card :post="$post"/>

    @endforeach
 
    </div>
    

</main>
