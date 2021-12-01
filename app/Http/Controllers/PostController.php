<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // get all data from database
    public function getallpost(){
        $posts = DB::table('posts')->get();
        return view('posts',compact('posts'));
    }

    public function addpost(){
        return view('add-post');
    }

    public function addsubmit(Request $request){
        $post = DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_created','Post has been created successfully');
    }

    public function getpostbyid($id){
        $posts=DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('posts'));
    }

    public function deletepost($id){
        $posts = DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully');
    }

    public function editpost($id){
        $posts = DB::table('posts')->where('id',$id)->first();
        return view('edit-post',compact('posts'));
    }

    public function updatepost(Request $request){
        $post = DB::table('posts')->where('id',$request->id)->update(
            [
                'title'=>$request->title,
                'body'=>$request->body
            ]
        );
        return back()->with('post_update','Post has been updated successfully');
    }
    public function innerJoinClause(){
        $request = DB::table('clause')->join('posts','clause.id','=','posts.clause_id')->select('clause.name','posts.title','posts.body');
        return $request;
    }
}
