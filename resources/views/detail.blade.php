@extends('layout')

@section('content')
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><a href="/admin/restaurant">Restaurant</a></h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="/admin/restaurant/luxury">Luxury</a></li>
        <li><a href="/admin/restaurant/casual">Casual</a></li>
        <li><a href="/admin/restaurant/eatery">Eatery</a></li>
      </ul><br>

    </div>

    <div class="col-sm-9">
      <h2>Place: {{$res->name}}</h2>
      <a href="/admin/restaurant/detail/{{$result->id}}/edit"><button>Edit</button></a>
      <a href="/admin/restaurant/detail/{{$result->id}}/delete">delete</a>
      <h4><small>Name:{{$result->name}}</small></h4>
      <h4><small>Email:<a href="{{$result->email}}">{{$result->email}}</a></small></h4>
      <h4><small>Contact:{{$result->contact}}</small></h4>
      <h4><small>Details:{{$result->detail}}</small></h4>
      <h4><small>Type:{{$result->type}}</small></h4>
    </div>
  </div>
</div>

@stop
