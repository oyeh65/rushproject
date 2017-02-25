<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Restaurant;
class AdminController extends Controller
{

    public function view(){
      $s=new Place;
      $result=$s->all();
      return view('/admin', compact('result'));
    }
    public function restaurantview(){
      $s=new Restaurant;
      $result=$s->all();
      $p=new Place;
      $res=$p->all();
      return view('/restaurant',compact('result','res'));
    }
    public function luxuryview(){
      $s=new Restaurant;
      $result=$s->where('type','luxury')->get();
      $p=new Place;
      $res=$p->all();
      return view('/luxury', compact('result','res'));
    }
    public function casualview(){
      $s=new Restaurant;
      $result=$s->where('type','casual')->get();
      $p=new Place;
      $res=$p->all();
      return view('/casual', compact('result','res'));
    }
    public function eateryview(){
      $s=new Restaurant;
      $result=$s->where('type','eatery')->get();
      $p=new Place;
      $res=$p->all();
      return view('/eatery', compact('result','res'));
    }
}
