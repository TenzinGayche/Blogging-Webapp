@extends('layout')
@section('container')


<body class="antialiased ">

    <div class="blogs">
        <div class="mb-2 mt-3">
        <?php foreach ($categories as $category) {
            echo "<a class=\"btn btn-light border pt-1 pb-1 p-2 m-2 mt-1\" href=\"/categories/{$category->slug}\">{$category->name}</a>";
        }
        ?>
 </div>

        <?php foreach ($posts as $post) {
            echo "<div class=\"blog shadow container bg-light rounded p-3 mt-3\">
                <a href=\"/posts/$post->slug\">
                <h3 class=\"fw-bold\">{$post->title}</h3></a>
                <img class=\"rounded\" src=\"/storage/$post->thumbnail\" alt=\Italian Trulli\" / >
                <h6 class='fw-bold mt-2'>by <a  href=\"/users/{$post->user->name}\"> {$post->user->name}</a></h6>
       <a class=\"btn btn-dark p-1 mb-2\" href=\"/categories/{$post->category->slug}\">{$post->category->name}</a>
               <p>$post->excerpt</p>
            </div>";
        }
        ?>
        
        @if (session()->has('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
                <p class="alert alert-success ">{{ session('success') }}</p>
            </div>
        @endif
        @error('password')
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
            <p class="alert alert-danger">{{ $message}}</p>
        </div>

        @enderror

</html>
@endsection