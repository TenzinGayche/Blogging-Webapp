@extends('layout')
@section('container')
   <body class="antialiased">
        <div class="blogs">

       <div class="blog">
        <?php 
            echo "
                <h1>{$post->title}:</h1></a>
                <form method=\"GET\" action=\"#\"><textarea >\"{$post->body}\"</textarea></form>
        ";
 ?>
   
    </body>
 
</html>
@endsection