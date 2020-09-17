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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/age/{number_of_months}/', function ($number_of_months) {
    if ($number_of_months<2)
        return "În primele săptămâni de viață somnul este dezorganizat, iar nevoia de somn este foarte mare. Bebelușul are nevoie să doarmă din nou la 60 de minute de la trezirea precedentă. Sunt normale somnurile scurte, de 20-30 de minute.";

    if ($number_of_months>=2 && $number_of_months<5)
        return "De pe la 12 săptămâni începe să se dezvolte ritmul circadian de somn, ceasul intern care dictează când are nevoie organismul de somn. Treptat, bebelușii încep să doarmă mai multe ore legate noaptea, iar ziua cresc perioadele de activitate de la 60 de minute la 90 de minute. Până la 5 luni se aplică regula de 90 de minute: somn la 90 de minute după trezirea din somnul precedent. Ora de culcare de seară este în jur de 7-8, în funcție de ultimul somn de zi.";

    if ($number_of_months>=5 && $number_of_months<7)
        return "La această vârstă crește perioada de activitate la 2 ore între somnurile de zi, cu primul somn mai devreme, la 90 de minute. Programul de somn optim: primul somn la ora 9, al doilea la 12, al treilea la 3, culcarea de seară în jur de 7. Spre sfârșitul perioadei se face trecerea de la trei somnuri de zi la două.";

    if ($number_of_months>=7 && $number_of_months<16)
          return "În jur de 7 luni, se face trecere de la 3 trei somnuri de zi la două. Orele biologice pentru două somnuri sunt 9 și la 13, cu o culcare de seară la 3 ore de la trezirea din somnul de prânz. Pe perioada tranziției însă, se poate ca somnul de prânz să înceapă mai devreme sau să fie mai scurt. În acele zilele, oferiți un al treilea somn din care bebelușul să se trezească cel târziu la 4:30, pentru a proteja ora de culcare de seară.Programul cu două somnuri de zi are ca intervale de activitate 2 ore (de la trezirea de dimineață până la primul somn al zilei), 2 ore și jumătate (între somnul de dimineață și cel de prânz) și 3 ore (de la trezirea din somnul de prânz până la culcarea de seară).";

     if ($number_of_months>=16)
         return "Tranziția de la două somnuri de zi la unul singur se face în jur de 1 an și 4 luni, pentru unii copii mai devreme, pentru alții mai târziu. Dacă timp de trei săptămâni copilul mai mult doarme un singur somn decât două pe zi, este momentul să faceți tranziția la un singur somn. Pe perioada tranziției, somnul de prânz va fi în jurul orei 11-12, iar culcarea de seară la 5-6, până când copilului îi crește rezistența și poate ajunge la ora biologică de somn pentru somnul de prânz – ora 13, iar somnul de prânz se prelungește până la 2-3 ore. Astfel ora de culcare de seară ajunge să fie în jur de 7 (la maxim 4 ore de la trezirea din somnul de prânz). Treptat, pe parcursul a câteva săptămâni, programul cu un singur somn de zi se consolidează și somnul de prânz devine consistent.Înspre doi ani, copiii încep să își prelungească perioada de activitate de seară până la 4h30, cu o culcare în jur de 7:30.";
});
