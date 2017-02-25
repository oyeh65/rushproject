<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class logcontroller extends Controller
{
    //
    public function view(){
      return view('login');
    }
    public function log(Request $request){
      //$s=DB::table('users')->where('type','=',admin);
      $s=new User;
      $result=$s->where('name',$request->name)->where('password',$request->password)->first();
      if(!$result){
        return $result;
        //return redirect('/login');
      }
      else{
        session()->put('status',1);
        session()->put('username',$request->name);

        if($result->type=='admin'){
          return redirect('/admin');
        }
      }
    }

    public function logout(){
      session()->flush();
      session()->put('status',0);
      return redirect('/login');
    }
}
