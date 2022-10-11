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
Route::get("users", function () {
    return view('users', ["name" => 'peter']);
});
Route::get("users/{name}", function ($user) {
    return view('users', ["name" => $user]);
});

Route::get("users/{name}/{veli}", function ($name, $veli) {

    return view('users', ["name" => $veli, "veli" => $name]);
});
Route::get("array",  function () {

    $var = array('ali', 'mahmut', 'kerim');
    dd($var);
});
