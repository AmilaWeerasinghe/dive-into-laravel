<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersControl;
use App\Http\Controllers\HTMLUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\modelUserController;
use App\Http\Controllers\HttpClientController;
use App\Http\Controllers\httpController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\MemberController;

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

Route::get('/hello', function () {
    return view('hello');
});

Route::view("about", 'about');

Route::get('/contact', function () {
    return redirect("about");
});

Route::get("users", [Users::class, 'index']);

Route::get("user", [UsersControl::class, 'loadView']);


//Route::get('/user',function(){
//  return view("user");

//});


//route for controller
Route::post("newusers", [HTMLUserController::class, 'getData']);

//route for page/view
Route::view("login", "newusers");

Route::view("home", "home")->middleware('routeProtected');
Route::view("noaccess", "noaccess");

//group middleware
Route::group(['middleware' => ['protectedPage']], function () {
    Route::view('users', 'users');
});

Route::get('dbuser', [UserController::class, 'index']);

Route::get('modelusers', [modelUserController::class, 'getData']);
Route::get('httpclient', [HttpClientController::class, 'index']);

route::post("conhttprequest", [httpController::class, 'testRequest']);
Route::view('httprequest', 'httprequest');

Route::view('newlog', 'login');
Route::post('autheduser', [userAuth::class, 'userLogin']);
Route::view('profile', 'profile');

Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('newlog');
});


Route::view("upload", 'upload');
Route::post("upload", [UploadController::class, 'index']);
Route::get("list", [MemberController::class, 'show']);
