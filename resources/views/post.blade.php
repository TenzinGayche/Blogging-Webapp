@extends('layout')
@section('container')
   <body class="antialiased">
        <div class="blogs">

       <div class="container bg-light rounded p-5 mt-5 blog ">
        <?php 
            echo "
                <h1>{$post->title}:</h1></a>
                <img class=\"rounded\" src=\"/storage/$post->thumbnail\" alt=\Italian Trulli\" / >
                <p>by <i>{$post->user->name}</i> in 
   <i><a href=\"/categories/{$post->category->slug}\">{$post->category->name}</a></i></p>
  
       <p>$post->excerpt</p>
               <p>{$post->body}</p>
            
     
    <button> <a href=\"/\"><b> ⬅️</a></button>
        
       
        <a class=\"edit\" href=\"/post/edit/{$post->slug}\">✏️  </a>
        ";
 ?>
       </div>
       
       <section class=" rounded">
        <div class="container text-dark ">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="d-flex justify-content-center  mb-4">

                
                @if (!$post->comment->isEmpty())
                <h4 class="text-dark "> Comments</h4>

                    
                  </div>
                </div>
              </div>
              @auth
              <div class="card mb-3">
                <div class="card-body">
              <img class="rounded-circle shadow-1-strong me-3 "
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20({{auth()->id()}}).webp" alt="avatar" width="40"
                      height="40" />
                    
              <i class="fa fa-fire-extinguisher" aria-hidden="true"></i>
              <form class="d-flex flex-column align-items-end mt-2" method="POST" action="/post/{{$post->slug}}/comment">
                @csrf
                
                <textarea name="body"  class="border p-3"id="" cols="30" rows="10" required></textarea>
                <button class="comment-button btn btn-sm btn-primary float-right mt-2 " style="width:90px;" type="submit">Post</button>
              </form>
                        </div>
                      </div>
                      @else 
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
        <p class="alert alert-warning ">Login to write comment</p>
    </div>
      @endauth
             
      <?php

      foreach ($post->comment as $comment) {
    
      
             echo " <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-start\">
                    <img class=\"rounded-circle shadow-1-strong me-3\"
                      src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20({$comment->user->id}).webp\" alt=\"avatar\" width=\"40\"
                      height=\"40\" />
                    <div class=\"w-100\">
                      <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h6 class=\"text-primary  mb-0\">
                          {$comment->user->name}
                          <span class=\"text-dark ms-2\">{$comment->body}</span>
                        </h6>
                    
                      </div>
                      <div class=\"d-flex justify-content-between align-items-center\">
                        <p class=\"small mb-0 text-secondary\" >
                          <a href=\"#!\" class=\"link-grey\">Remove</a> •
                          <a href=\"#!\" class=\"link-grey\">Reply</a> •
                          <a href=\"#!\" class=\"link-grey\">Translate</a>
                        </p>
                        <div class=\"d-flex flex-row\">
                          <i class=\"fas fa-star text-warning me-2\"></i>
                          <i class=\"far fa-check-circle\" style=\"color: #aaa;\"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              ";
            }
              ?>
            
        </div>
      </section>
      @else 
   
       @auth
              <div class="card mb-3">
                <div class="card-body">
              <img class="rounded-circle shadow-1-strong me-3 "
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20({{auth()->id()}}).webp" alt="avatar" width="40"
                      height="40" />
                    
              <i class="fa fa-fire-extinguisher" aria-hidden="true"></i>
              <form class="d-flex flex-column align-items-end mt-2" method="POST" action="/post/{{$post->slug}}/comment">
                @csrf
                
                <textarea name="body"  class="border p-3"id="" cols="30" rows="10" required></textarea>
                <button class="comment-button btn btn-sm btn-primary float-right mt-2 " style="width:90px;" type="submit">Post</button>
              </form>
                        </div>
                      </div>
                      @else 
      <h6>No comments</h6>
    </div>
  
  
   
      @endauth

      @endif
      
        </div>
        
   
    </body>

</html>
@endsection


