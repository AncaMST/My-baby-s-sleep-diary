<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class Children extends Controller
{


    function save(Request $req) {
        $child = new Child;
        $child->First_name = $req->First_name;
        $child->Birth_date = $req->Birth_date;
        $child->Age_in_months = Carbon::today()->diffInMonths($child->Birth_date);
        $child->user_id = Auth::user()->id; 
        $child->save();
        return redirect('/age/'.$child->Age_in_months);
    }

    public function index() {
        $updatedAge= $this->updateAge();
        $userid = Auth::user()->id; 
        $children = Child::all()->where('user_id', $userid);
        return view('showchildren', compact('children'));
    }

    public function sleepinfo($age) {
        return redirect('/age/'.$age);
    }

    public function sleepAlert() {
        $updatedAge= $this->updateAge();
        $children = Child::all();
        foreach($children as $child) {
            $ageNextMonth = $child->Age_in_months + 1;
            if ($ageNextMonth == 3 || $ageNextMonth == 5 || $ageNextMonth == 7 || $ageNextMonth == 16) {
                $userid = $child->user_id;
                $childname = $child->First_name;
                $user = User::all()->where('id', $userid);
                foreach($user as $user) {
                    $username = $user->name;
                    $useremail = $user->email;
                    $data = [
                        'title'=>'Dear '.$username.',',
                        'content'=>'Your child, '.$childname.', is growing and will pass soon to another sleep program',
                        'info'=> 'Please visit My baby\'s sleep diary for more information.'
                    ];
                
                    Mail::send('mail', $data, function($message) use ($useremail, $username) {
                        $message->to('anca31musat@gmail.com', $username)->subject('Reminder: your child will pass to another sleep program');
                    });
                    
                }
            }
        }


    }

    public function updateAge() {
        $children = Child::all();
        foreach($children as $child) {
            $child->Age_in_months = Carbon::today()->diffInMonths($child->Birth_date);
            $child->update();
        }
    }
}