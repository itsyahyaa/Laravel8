<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function loginsubmit(Request $request){

        $validateData = $request->validate(
            [
                'email'=> 'required|email',
                'password'=> 'required|min:6|max:12'
            ]
        );

        $email = $request->input('email');
        $passward = $request->input('password');
        $output = 'Email: '.$email.'<br>'.'Passward:'.$passward;
        return $output; // this return is equal to return $request->all()
        // return $request->all(); this one request all the input and returns
    }
}
