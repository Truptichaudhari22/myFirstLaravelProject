@extends('layout')

@section('content')
<h1>Crate Page</h1>
<form action="createsubmit" method="post">
@csrf



  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" name="email" placeholder="Enter email" id="email">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection