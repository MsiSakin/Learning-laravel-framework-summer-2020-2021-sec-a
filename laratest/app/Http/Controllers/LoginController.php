<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function varify(Request $req){
       if($req->uname == $req->password){
           return redirect('/home');
       }
       else{
           echo "Invalid!!!";
       }
    }
}
