@extends('layout')
@section('container')

    <body class="antialiased">
        <div class="blogs">

            <div class="blog">
                <?php
                echo "<h1>{$post->title}:</h1></a>
                                       <form method=\"GET\" action=\"\">
                                        <input class=\"editor\" name=\"body\" placeholde=\"{$post->body}\"type=\"txt\" >
                                       
                                       </form>"
                ?>

    </body>

    </html>
@endsection
