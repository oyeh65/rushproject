@extends('layout')

@section('content')
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><a href="/admin/restaurant">Restaurant</a></h4>
        <ul class="nav nav-pills nav-stacked">
        <li><a href="/admin/luxury">Luxury</a></li>
        <li><a href="/admin/casual">Casual</a></li>
        <li><a href="/admin/eatery">Eatery</a></li>
      </ul><br>

    </div>

    <div class="col-sm-9">
      <h3>Places where to go</h3>
        @foreach($res2 as $res2)
        <ul>
          <li>
            <a href="/admin/restaurant/place/{{$res2->id}}">{{$res2->name}}</a>
          </li>
        </ul>
      @endforeach
      <h2>Place: {{$res->name}}</h2>
      <h3> Restaurant</h3>
      @foreach($result as $result)
      <ul><li><a href="/admin/restaurant/detail/{{$result->id}}">{{$result->name}}</a></li></ul>
      @endforeach
      <hr>
    </div>
  </div>
</div>

@stop
