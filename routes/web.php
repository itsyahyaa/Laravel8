<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Clientcontroller;
use App\Http\Controllers\Fluentcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\uploadcontroller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}',[Usercontroller::class,'index'])->name('home.index');

//Showing view from web
Route::get('/home',function (){
    return view('user');
});
//Showing view from controller
Route::get('/home1',[Usercontroller::class, 'user'])->name('home.user');

Route::get('/product',[ProductController::class, 'index'])->name('product.index');

Route::get('/getallpost',[ClientController::class,'getallpost'])->name('post.getallpost');
Route::get('/getallpost/{id}',[ClientController::class,'getpostbyid'])->name('post.getpostbyid');

Route::get('/addpost',[ClientController::class,'addpost'])->name('post.addpost');

Route::get('/fluent',[FluentController::class,'index'])->name('fluent.index');

Route::get('/login', [LoginController::class,'index'])->name('login.index');

Route::post('/login', [LoginController::class,'loginsubmit'])->name('login.loginsubmit');

Route::get('/posts', [PostController::class,'getallpost'])->name('posts.getallpost');

Route::get('/add-post',[PostController::class,'addpost'])->name('post.addpost');

Route::post('/submit-post',[PostController::class,'addsubmit'])->name('post.addsubmit');

Route::get('/posts/{id}',[PostController::class,'getpostbyid'])->name('post.getbyid');

Route::get('/delete/{id}',[PostController::class,'deletepost'])->name('post.deletepost');
Route::get('/edit/{id}',[PostController::class,'editpost'])->name('post.editpost');

Route::post('/update-post',[PostController::class,'updatepost'])->name('post.updatepost');

Route::get('/join',[PostController::class,'innerJoinClause'])->name('post.Join');


Route::get('/index',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/upload',[uploadcontroller::class, 'uploadform'])->name('upload.form');
Route::post('/upload',[uploadcontroller::class, 'uploadfile'])->name('upload.file');

// mail
Route::get('/send-email',[MailController::class, 'sendEmail']);

Route::get('/students',[StudentController::class, 'fetchStudents']);
