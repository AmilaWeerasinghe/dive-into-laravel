<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index()
    {
        echo "Hello from controller called users  ";
        echo " Test static api ";

        return ['name'=>"anil" ,'age'=>27];
    }
}
