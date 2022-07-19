@extends('layout')
@yield('Navbar')
@section('container')
    <body class="antialiased">
        <div class="blogs">

  <?php foreach ($posts as $post) {
    echo "<div class=\"blog\">
        <a href=\"/posts/$post->slug\">
           

        <h3 >$post->title:</h3></a>
        <p>by <a  href=\"/users/{$post->user->name}\"> <i>{$post->user->name}</i></a></p>
   <i><a href=\"/categories/{$post->category->slug}\">{$post->category->name}</a></i>
  
       <p>$post->excerpt</p>
    </div>";

    }
    ?>
     <?php echo "<p class=\"pagination\">{$posts->links()}</p>"?>
  
</html>
@endsection