<html>
<head>
<script src="{{asset('js/app.js')}}">
    </script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="Header">
@section('header')
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="list">User List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="create">Create Account</a>
    </li>
  </ul>
</div>
</nav>
<!-- <h1>Header Part</h1> -->
@show
</div> 


<div class="Content">
@section('content')
@show
</div> 


<div class="footer">
@section('footer')
<h1>Footer Part</h1>
@show
</div> 
</body>


</html>
