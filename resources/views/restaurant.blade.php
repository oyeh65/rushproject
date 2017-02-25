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
      <h2>Places you want to vist:</h2> <ul >
      @foreach($res as $r)
        <h3><a href="/admin/restaurant/place/{{$r->id}}">{{$r->name}}</a></h3>
      @endforeach
      </ul>
      <h4><small>RECENT Restaurant</small></h4>
      @foreach($result as $result)
      <ul><li><a href="/admin/restaurant/detail/{{$result->id}}">{{$result->name}}</a></li></ul>
      @endforeach
      <hr>
    </div>
  </div>
</div>

@stop
