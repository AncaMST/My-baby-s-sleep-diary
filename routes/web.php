<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/age/{number_of_months}/', function ($number_of_months) {
    if ($number_of_months<2)
        return "In the first weeks of life, sleep is disorganized, and the need for sleep is very high. The baby needs to sleep again at 60 minutes after waking up. Short sleeps of 20-30 minutes are normal.";

    if ($number_of_months>=2 && $number_of_months<5)
        return "From the age of 12 weeks, the sleep's circadian rhythm, the internal clock that dictates when the body needs sleep, begins to develop. Gradually, babies begin to sleep for several hours at night, and during the day the activity periods increase from 60 minutes to 90 minutes. Up to 5 months the rule of 90 minutes applies: sleep at 90 minutes after waking up from the previous sleep. The evening bedtime is around 7-8 p.m., depending on the last day's sleep.";

    if ($number_of_months>=5 && $number_of_months<7)
        return "At this age, the period of activity increases until 2 hours between daytime sleeps, with the first sleep earlier, at 90 minutes. Optimal sleep schedule: the first sleep at 9a.m. o'clock, the second at 12p.m. o'clock, the third at 3p.m. o'clock, the evening sleep around 7p.m. Towards the end of the period, the transition from three to two day sleeps is made.";

    if ($number_of_months>=7 && $number_of_months<16)
          return "Around 7 months, it begins the transition from three to two day sleeps. The biological hours for the two day sleeps are 9a.m. and 1p.m., with a night sleep at 3 hours after waking up from the last day sleep. During the transition period, however, the second sleep may start earlier or be shorter. On those days, provide a third sleep from which the baby will wake up at 4:30p.m. the latest, to protect the evening bedtime hour. The two day sleeps program has 3 activity intervals, the first of them is 2 hours long(from waking up in the morning until the first sleep of the day), the second is 2 and a half hours long(between morning and noon sleep) and the third one is 3 hours long (from last day sleep to night bedtime).";

     if ($number_of_months>=16)
         return "The transition from two day sleeps to one is done around 1 year and 4 months, for some children earlier, for others later. If during three weeks the child has more days with one sleep than the days with two sleeps, it is time to make the transition to one sleep. During the transition period, the day sleep will be around 11-12, and the night bedtime at 5-6, until the child increases his resistance and can reach the biological day sleep  time at 13, with a sleep which lasts up to 2-3 hours. Thus the bedtime will be around 7 (at maximum 4 hours after waking up from lunch). Gradually, in a few weeks, the one day sleep program consolidates and day sleep becomes consistent. Around the age of two years, children begin to extend their evening activity period to four and a half hours, with a night bedtime at about 7: 30.";
});
