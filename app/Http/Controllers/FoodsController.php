<?php

namespace App\Http\Controllers;

use app\Models\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function index()
    {
        return Food::all();
    }

    public function takeId($id)
    {


        return   [
            [
                'id' => $id,
                'name' => 'Milk'
            ]
        ];
    }
}
