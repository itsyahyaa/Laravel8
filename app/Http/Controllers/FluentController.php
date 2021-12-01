<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    //
    public function index(){
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('MY name is Abdimalik bishar')->after('MY name'); // will print code from is abdimalik bishar
        echo $slice.'<br>';

        $slice = Str::of('Yahya')->append(' Mohamed');
        echo $slice . '<br>';

        $lower = Str::of('HELLO')->lower();
        echo $lower . '<br>';

        $upper = Str::of('hello')->upper();
        echo $upper . '<br>';

        $replace = Str::of('Yahya 10')->replace('10','15');
        echo $replace . '<br>';

        $title = Str::of('this is my name')->title();
        echo $title . '<br>';

        $slug = Str::of('This Laravel Framework')->slug('-');
        echo $slug . '<br>';
    }
}
