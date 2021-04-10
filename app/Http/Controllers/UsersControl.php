<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersControl extends Controller
{
    //
    function loadView()
    {
        return view("user",["name"=>"Amila Weerasinghe"]);
    }
}
