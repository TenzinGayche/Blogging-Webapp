@extends('layout')
@section('container')
   <body class="antialiased">
        <div class="blogs">

       <div class="container bg-light rounded p-5 mt-5 blog ">
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
       </div>
       <section class=" rounded">
        <div class="container my-5 py-5 text-dark ">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="d-flex justify-content-between align-items-left mb-4">
                <h4 class="text-dark mb-0 float-right"> Comments</h4>

                    
                  </div>
                </div>
              </div>
      <?php
      foreach ($post->comment as $comment) {
    
      
             echo " <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-start\">
                    <img class=\"rounded-circle shadow-1-strong me-3\"
                      src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp\" alt=\"avatar\" width=\"40\"
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
        </div>
        
   
    </body>

</html>
@endsection


