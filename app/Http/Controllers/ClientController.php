<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //
    public function getallpost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/todos');
        return $response->json();
    }
    public function getpostbyid($id){
        $response = Http::get('https://jsonplaceholder.typicode.com/todos/'.$id);
        return $response->json();
    }
    public function addpost(){
        $response = Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId' => 1,
            'title' => 'New Post Title',
            'body' => 'New Post'
        ]);
        return $response->json();
    }
}
