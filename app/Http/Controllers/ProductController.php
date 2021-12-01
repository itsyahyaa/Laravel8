<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $fruits = array('mango','apple', 'banana','melon');
        return view('product',compact('fruits'));
    }
}
