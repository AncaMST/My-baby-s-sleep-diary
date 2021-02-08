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
          return "În jur de 7 luni, se face trecere de la 3 trei somnuri de zi la două. Orele biologice pentru două somnuri sunt 9 și la 13, cu o culcare de seară la 3 ore de la trezirea din somnul de prânz. Pe perioada tranziției însă, se poate ca somnul de prânz să înceapă mai devreme sau să fie mai scurt. În acele zilele, oferiți un al treilea somn din care bebelușul să se trezească cel târziu la 4:30, pentru a proteja ora de culcare de seară.Programul cu două somnuri de zi are ca intervale de activitate 2 ore (de la trezirea de dimineață până la primul somn al zilei), 2 ore și jumătate (între somnul de dimineață și cel de prânz) și 3 ore (de la trezirea din somnul de prânz până la culcarea de seară).";

     if ($number_of_months>=16)
         return "Tranziția de la două somnuri de zi la unul singur se face în jur de 1 an și 4 luni, pentru unii copii mai devreme, pentru alții mai târziu. Dacă timp de trei săptămâni copilul mai mult doarme un singur somn decât două pe zi, este momentul să faceți tranziția la un singur somn. Pe perioada tranziției, somnul de prânz va fi în jurul orei 11-12, iar culcarea de seară la 5-6, până când copilului îi crește rezistența și poate ajunge la ora biologică de somn pentru somnul de prânz – ora 13, iar somnul de prânz se prelungește până la 2-3 ore. Astfel ora de culcare de seară ajunge să fie în jur de 7 (la maxim 4 ore de la trezirea din somnul de prânz). Treptat, pe parcursul a câteva săptămâni, programul cu un singur somn de zi se consolidează și somnul de prânz devine consistent.Înspre doi ani, copiii încep să își prelungească perioada de activitate de seară până la 4h30, cu o culcare în jur de 7:30.";
});
