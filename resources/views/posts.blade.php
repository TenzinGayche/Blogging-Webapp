@extends('layout')
@section('container')


<body class="antialiased">

    <div class="blogs">

        <?php foreach ($posts as $post) {
            echo "<div class=\"blog\">
                <a href=\"/posts/$post->slug\">
                <h3 class=\"fw-bold\">$post->title</h3></a>
                <h6 class='fw-bold'>by <a  href=\"/users/{$post->user->name}\"> {$post->user->name}</a></h6>
       <a class=\"btn btn-outline-primary p-1 mb-2\" href=\"/categories/{$post->category->slug}\">{$post->category->name}</a>
               <p>$post->excerpt</p>
            </div>";
        }
        ?>
        <?php echo "<p class=\"pagination\">{$posts->links()}</p>"; ?>
        @if (session()->has('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
                <p class="alert alert-success">{{ session('success') }}</p>
            </div>
        @endif

</html>
@endsection