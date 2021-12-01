<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//api request tested in postman
Route::get('/user/{name?}', function($name){
    return 'hi '.$name;
});
Route::get('/user/{id?}',function($id = NULL){
    return 'Your Product Number is' .$id;
});
