@extends('layout')

@section('container')

    <body  class="   d-flex flex-column align-items-center  justify-content-center">
       
      <form class=" create-post d-flex flex-column  bg-light rounded p-5 border-bottom" method="POST" action="/admin/posts/create" enctype="multipart/form-data">
        <h2 class="text-center">Create a post</h2>
        @csrf
        <Label for="floatingInputValue">Title</Label>
        <input class="form-control " name="title" type="text">
        <Label class="form-label">Slug</Label>
        <input class="form-control "name="slug" type="text">
        <Label class="form-label ">Excerpt</Label>
        <input class="form-control " name="excerpt" type="text">
        <Label class="form-label ">Thumbnail</Label>
        <input class="form-control " name="thumbnail" type="file">
       
        <select  name="category_id" class="form-select my-3" aria-label=".form-select-sm example">
           
          
          @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option> 
            @endforeach
          </select>
        <Label class="form-label  " >Body</Label>
        <input class="form-control  " name="body" type="text" style="height: 100px;">
        <input class="btn btn-primary mt-2" type="Submit">
      </form>
      @error('body')
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
        <p class="alert alert-danger">{{ $message}}</p>
    </div>
      @enderror 
      @error('title')
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
        <p class="alert alert-danger">{{ $message}}</p>
    </div>
      @enderror 
      @error('slug')
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
        <p class="alert alert-danger">{{ $message}}</p>
    </div>
      @enderror 
      @error('excerpt')
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
        <p class="alert alert-danger">{{$message}}</p>
    </div>
      @enderror 
      @error('thumbnail')
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
        <p class="alert alert-danger">{{$message}}</p>
    </div>
      @enderror 
    </body>
</html>
@endsection