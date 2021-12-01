<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function index($name){
        return "Hi from Usercontroller, Name: ".$name;
    }

    public function user(){
        // adding array of variable ino view blade
        $name = "Yahya";
        $user = array(
        "name"=>"Yahya Mohamed",
        "email"=>"Yahya@gmail.com",
        "phone"=>"070707",

        );
        return view('user',compact('name','user'));
    }
}
