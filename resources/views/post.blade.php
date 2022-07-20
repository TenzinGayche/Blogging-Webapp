@extends('layout')
@section('container')
   <body class="antialiased">
        <div class="blogs">

       <div class="blog">
        <?php 
            echo "
                <h1>{$post->title}:</h1></a>
                <p>by <i>{$post->user->name}</i> in 
   <i><a href=\"/categories/{$post->category->slug}\">{$post->category->name}</a></i></p>
  
       <p>$post->excerpt</p>
               <p>{$post->body}</p>
            
     
    <button> <a href=\"/\"><b> ⬅️</a></button>
        
       
        <a class=\"edit\" href=\"/post/edit/{$post->slug}\">✏️  </a>
        ";
 ?>
   
    </body>

</html>
@endsection


