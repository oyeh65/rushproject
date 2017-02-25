@extends('layout')

@section('content')
<form method="post" action="/admin/restaurant/detail/{{ $result->id }}/edit">
      {{ method_field('patch') }}
      {{ csrf_field() }}
          <div class="container-fluid">
            <div class="row content">
              <div class="col-sm-12">
                <h2>Place: {{$res->name}}
                <h4><small><input type="text" value="{{$result->name}}" name="name"/> </small></h4>
                <h4><small><input type="email" value="{{$result->email}}" name="email"/></a></small></h4>
                <h4><small><input type="text" value="{{$result->contact}}" name="contact"/></small></h4>
                <h4><small><input type="text" value="{{$result->detail}}" name="detail"/></small></h4>
                <h4><small><input type="text" value="{{$result->type}}" name="type"/></small></h4>
                <button type="submit">Edit</button>
              </div>
            </div>
          </div>
        </form>
@stop
