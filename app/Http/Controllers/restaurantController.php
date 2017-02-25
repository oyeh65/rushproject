<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Restaurant;
class restaurantController extends Controller
{
    //
    public function view(){
      $s=new Place;
      $result=$s->all();
      return view('/addrestaurant',compact('result'));
    }
    public function viewdetail($id){
      $s=new Restaurant;
      $result=$s->where('id',$id)->first();
      $p=new Place;
      $res=$p->where('id',$result->place_id)->first();
      return view('/detail',compact('result','res'));
    }
    public function viewrestaurant($id){
      //$s=new Restaurant;
      //$result=$s->where('place_id',$id)->get();
      $p=new Place;
      $res=$p->where('id',$id)->first();
      $s=new Restaurant;
      $result=$s->where('place_id',$res->id)->get();
      $p2=new Place;
      $res2=$p2->all();
      return view('/place',compact('res','result','res2'));
    }
    public function vieweditdetail($id){
      $s=new Restaurant;
      $result=$s->where('id',$id)->first();
      $p=new Place;
      $res=$p->where('id',$result->place_id)->first();
      return view('/edit',compact('result','res'));
    }
    public function editdetail(Request $request, Restaurant $id){
      $id->update($request->all());
      return redirect('admin/restaurant');
    }
    public function add(Request $request){
      $s= new Restaurant;
      $s->name=$request->name;
      $s->email=$request->email;
      $s->contact=$request->contact;
      $s->place_id=$request->place_id;
      $s->detail=$request->detail;
      $s->type=$request->type;
      $s-> save();
    return redirect('/admin');
    }
    public function delete($id){
      $s=new Restaurant;
      $s->where('id',$id)->delete();
      return redirect('admin/restaurant');
    }

}
