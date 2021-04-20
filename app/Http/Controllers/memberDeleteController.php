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

    function delete($id)
    {
        $data = member::find($id);
        //$data->delete();
        $data->where('Id', $id)->delete();


        return redirect('del');
    }
    function showData($id)
    {
        $data = member::find($id);
        return view("edit", ['data' => $data]);
    }

    function Update(Request $req)
    {
        $data = member::find($req->id);
        echo $data;
        $data->Name = $req->Name;
        $data->Age = $req->Age;
        $data->City = $req->City;
        $data->save();
        echo $data;
        $data->save();


        return redirect("del");
    }
}
