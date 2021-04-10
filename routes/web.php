<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersControl;

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

Route::get('/hello',function(){
    return view('hello');

});

Route::view("about",'about');

Route::get('/contact',function(){
    return redirect("about");

});

Route::get("users",[Users::class,'index']);

Route::get("user",[UsersControl::class,'loadView']);


//Route::get('/user',function(){
  //  return view("user");

//});