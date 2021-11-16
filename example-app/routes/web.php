<?php

use Illuminate\Support\Facades\Route;
use App\Models\Conference;
use App\Models\User;
use App\Http\Controllers\ControllerSponsor;
use App\Http\Controllers\Speakers;
use App\Models\Speaker;
use App\Models\Sponsor;
use GuzzleHttp\Promise\Create;

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
    $confs = Conference::all();

    return View::make('home')->with('confs', $confs);
});

Route::get('/palestras/{id}', function ($id) {
    // $path = __DIR__ . "/../resources/palestras/{$slug}.html";
    // if( ! file_exists($path)){
    //     abort(404);
    // }
    // $conf = file_get_contents($path);

    $conf = Conference::where('id', $id)->first();
   // dd($conf);
    return view('conf', ['confe' => $conf]);
});


Route::get('/profile', function () {
    $user = User::where('id', 1)->first();
    return view('profile', ['user' => $user]);
});

Route::get('/sponsor', [ControllerSponsor::class, 'index']);


Route::get('/sponsor/{id}', [ControllerSponsor::class, 'show']);

Route::get('/createSponsor', [ControllerSponsor::class, 'create']);

Route::get('/speakers', [Speakers::class, 'showAll']);

Route::get('/speaker/{id}', [Speakers::class, 'show']);

Route::resource('sponsor', ControllerSponsor::class);

