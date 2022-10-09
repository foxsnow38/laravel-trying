<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$user =  User::first();
Auth::login($user);


Route::get('foods', 'App\Http\Controllers\FoodsController@index');
Route::get('foods/{id}', 'App\Http\Controllers\FoodsController@takeId');
Route::post('foods', 'App\Http\Controllers\FoodsController@store');
Route::put('foods/{id}', 'App\Http\Controllers\FoodsController@update');
Route::delete('foods/{id}', 'App\Http\Controllers\FoodsController@update');
