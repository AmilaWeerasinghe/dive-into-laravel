<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class addMemberController extends Controller
{
    //
    function addData(Request $req)
    {
        $member = new member();
        $member->Name = $req->name;
        $member->Age = $req->age;
        $member->ID = $req->id;
        $member->City = $req->city;
        $member->save();
        return redirect('add');
    }
}
