<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/childregistration', 'childregistration');
Route::post('submit','App\Http\Controllers\Children@save');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/age/{number_of_months}/', function ($number_of_months)  {
    if ($number_of_months<=2)
        return view('age1');

    if ($number_of_months>2 && $number_of_months<5)
        return view('age2');

    if ($number_of_months>=5 && $number_of_months<7)
        return view('age3');

    if ($number_of_months>=7 && $number_of_months<16)
          return view('age4');

     if ($number_of_months>=16)
         return view('age5');
});

Route::get('/showchildren', 'App\Http\Controllers\Children@index');

Route::get('/sleepinfo/{age}/', 'App\Http\Controllers\Children@sleepinfo')->name('sleepinfo');

Route::get('/date', function() {
    $date = new DateTime();
    echo $date->format('d-m-Y');
});

Route::get('/sendEmail', 'App\Http\Controllers\Children@sleepAlert');

Route::get('/verifyDate', function(){
    $today = Carbon::today();
    $lastDayOfMonth = Carbon::parse($today)->endOfMonth();
    if ($today == $lastDayOfMonth) {
        return redirect('/sendEmail');
    } else
        return 2;
});