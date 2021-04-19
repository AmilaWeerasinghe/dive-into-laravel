<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class MemberController extends Controller
{
    //
    function show()
    {
        $data = member::all();
        return view('list', ['members' => $data]);
        //return member::all();
    }
}
