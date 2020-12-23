<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    //
    public function list(){
        $user=User::all();
        // return Session::get('logdata');
        
        return view('userlist',['user'=>$user]);
    }
    public function create(){
        return view('create');
    }
    public function login(){
        return view('login');
    }
    public function loginsubmit(Request $req){
        return User::select('*')->where(
          [  ['email', '=',$req->email],
            ['password' ,'=', $req->password]
          ]
        )->get();
        $req->session()->put('logindata',[$req->input()]);
        return redirect('/list');
        // print_r($req->input());
    }
    public function createsubmit(Request $req)
      {
          $user = new user;
          $user->name=$req->name;
          $user->email=$req->email;
          $user->password=$req->password;
          $user->save();
        //   if($result)
        //   {
              return redirect('/list');
        //   }
      }
    
}
