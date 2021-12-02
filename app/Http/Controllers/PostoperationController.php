<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postoperation;

class PostoperationController extends Controller
{
    // this is video 29 eloquent crud operation
    public function add()
    {
        return view('add-operation');
    }
    // adding post to database usng model
    public function addpost(Request $request){
        $post = new Postoperation();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created','Post has been added successfully');

    }
    // getting post from database using model
    public function getpost(){
        $posts = Postoperation::orderBy('id','DESC')->get();
        return view('getpost',compact('posts'));
    }
    //getting element by id
    public function getpostbyid($id){
        $posts = Postoperation::where('id',$id)->first();
        return view('single-detailed',compact('posts'));
    }
    //edit post
    public function editpost($id){
        $post = Postoperation::find($id);
        return view('edit-detailed',compact('post'));
    }
    //update post
    public function updatepost(Request $request){
        $post = Postoperation::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_update','Post has been updated successfully');
    }
    public function deletepost($id){
        Postoperation::where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully');
    }

}
