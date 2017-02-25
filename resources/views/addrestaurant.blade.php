@extends('layout')

@section('content')
<form  method="post" action="addrestaurant">
          {{ csrf_field() }}
            <div class="content" align="center">
                    Name of Restaurant:<input type="text" id="txtname" name="name"/><br/>
                    Email Address:<input type="email" id="txt" name="email"/><br/>
                    Contact:<input type="text" id="txt" name="contact"/><br/>
                      Select Town:
                      <select id="sel1" name="place_id">
                        @foreach($result as $res)
                          <option value='{{$res->id}}'>{{$res->name}}</option>
                        @endforeach
                      </select></br>
                      Detail:<input type="text area" name="detail"/></br>
                      Type of Restaurant:<select name="type">
                      <option value="luxury">Luxury</option>
                      <option value="casual">Casual</option>
                      <option value="eatery">Eatery</option>
                      </select>
                    <button type="submit">Add</button>
            </div>
</form>

@stop
