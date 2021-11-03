<?php

use Illuminate\Support\Facades\Route;
use App\Models\Conference;


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

Route::get('/palestras/{conf}', function ($slug) {
    $path = __DIR__ . "/../resources/palestras/{$slug}.html";
    if( ! file_exists($path)){
        abort(404);
    }
    $conf = file_get_contents($path);


    return view('conf', ['conf' => $conf ]);
});

