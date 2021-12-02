<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //
    public function uploadform(){
        return view('upload');
    }

    public function uploadfile(Request $request){
        $request->file->store('public');
        return "file has been uploaded successfully";
    }
}
