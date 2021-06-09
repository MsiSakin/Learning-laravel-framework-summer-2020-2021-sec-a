<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       // return view('home.index')->withId('1234');
       $id=212;
       $name='sakin';
        return view('home.index',compact('id','name'));

    }
}
