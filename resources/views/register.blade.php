@extends('layout')
@yield('Navbar')
@section('container')

    <body  class=" register container">
  
      <form class="regiterf " method="POST" action="">
        @csrf
        <Label for="floatingInputValue">Username</Label>
        <input class="form-control " name="username" type="text">
        <Label class="form-label">Name</Label>
        <input class="form-control "name="name" type="text">
        <Label class="form-label ">Email</Label>
        <input class="form-control " name="email" type="email">
        <Label class="form-label " >Password</Label>
        <input class="form-control " name="password" type="password">
        <input class="btn btn-primary mt-2" type="Submit">

      </form>
  
</html>
@endsection