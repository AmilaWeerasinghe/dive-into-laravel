<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class memberDeleteController extends Controller
{
    //
    function list()
    {
        $data = member::all();
        return view('deleteMember', ['members' => $data]);
    }

    function delete($Id)
    {
        $data = member::find($Id);
        //$data->delete();
        $data->where('Id', $Id)->delete();


        return redirect('del');
    }
}
