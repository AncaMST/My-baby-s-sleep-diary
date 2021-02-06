<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class Children extends Controller
{


    function save(Request $req) {
        $child = new Child;
        $child->First_name = $req->First_name;
        $child->Age_in_months = $req->Age_in_months;
        $child->save();
    }


}