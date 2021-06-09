<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    

    public function details($id){
        $users = $this->getUserList();
        $user = '';
        foreach($users as $u){
            if ($u['id']==$id) {
                $user=$u;
                break;
            }
        }
       
        return view('user.details')->with('user',$user);
    }    

    public function edit($id){
        $users = $this->getUserList();
        $user = '';
        foreach($users as $u){
            if ($u['id']==$id) {
                $user=$u;
                break;
            }
        }
       
        return view('user.edit')->with('user',$user);
    }

    public function update(Request $req){
        
        echo "Updated user is :"." ID : ".$req->id." Username : ".$req->uname." Password : ".$req->pass." Email : ".$req->email." Type : ".$req->type;
        
    }

    public function delete($id){
        return view('user.delete');
    }
    public function destroy($id){
        return view('user.delete');
    }


    public function list(){
        $users = $this->getUserList();

        return view('user.list')->with('userlist',$users);
    }

    public function getUserList(){
        return [
            ['id'=>1,'username'=>'sakin','password'=>'111','email'=>'sakin@gmail.com','type'=>'std'],
            ['id'=>2,'username'=>'saiful','password'=>'222','email'=>'saiful@gmail.com','type'=>'std'],
            
        ];
    }


}
