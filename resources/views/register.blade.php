@extends('layout')
@yield('Navbar')
@section('container')

    <body  class=" register container">
      <form class="regiterf " action="POST">
        <Label for="floatingInputValue">Username</Label>
        <input class="form-control " type="text">
        <Label class="form-label">Name</Label>
        <input class="form-control " type="text">
        <Label class="form-label is-invalid">Email</Label>
        <input class="form-control " type="text">
        <Label class="form-label">Password</Label>
        <input class="form-control " type="password">
        <input class="btn btn-primary mt-2" type="Submit">

      </form>
  
</html>
@endsection