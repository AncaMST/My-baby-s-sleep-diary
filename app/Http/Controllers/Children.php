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
        $child->user_id = Auth::user()->id; 
        $child->save();
        return redirect('/age/'.$child->Age_in_months);
    }

    public function index() {
        $userid = Auth::user()->id; 
        $children = Child::all()->where('user_id', $userid);
        return view('showchildren', compact('children'));
    }

    public function sleepinfo($age) {
        return redirect('/age/'.$age);
    }

}