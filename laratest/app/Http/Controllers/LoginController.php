<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('test.tst.index');
    }

    public function varify(Request $req){
      if($req->uname == $req->password){
        $req ->session()->put('uname',$req->uname);
           return redirect('/home');
       }
       else{
           echo "Invalid!!!";
       }
      
    }
}
