
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
      <a href="/admin/addrestaurant">
      <button type="button" class="btn btn-info btn-lg">Add Restaurant</button>
      </a>
      <hr>
      <h3>Places where to go</h3>
        @foreach($result as $res)
        <ul>
          <li>
            <a href="/admin/restaurant/place/{{$res->id}}">{{$res->name}}</a>
          </li>
        </ul>
      @endforeach
    </div>
  </div>
</div>

@stop
