@extends('layout')

@section('content')
<h1>List Page</h1>

<div>
<ul>
       
          @foreach($user as $u)
          <li><span>{{$u->name}}</span> <span>{{$u->email}}</span>  <span>{{$u->password}}</span> </li>
          @endforeach

</ul>
</div>
@endsection