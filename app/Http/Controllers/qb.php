<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class qb extends Controller
{
    //
    function dbOperations()
    {
        return DB::table('members')
            ->insert(
                [
                    'id' => 6,
                    'City' => 'USA',
                    'Age' => 21,
                    'Name' => 'John'
                ]
            );
    }
}
