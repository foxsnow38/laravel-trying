<?php

use Illuminate\Support\Facades\Route;


Route::get('foods', 'App\Http\Controllers\FoodsController@index');
Route::get('foods/{id}', 'App\Http\Controllers\FoodsController@takeId');
Route::post('foods', 'App\Http\Controllers\FoodsController@store');
Route::put('foods/{id}', 'App\Http\Controllers\FoodsController@update');
