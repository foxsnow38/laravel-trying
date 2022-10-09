<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function index()
    {
        return Food::paginate();
    }

    public function takeId($id)
    {


        return  Food::find($id);
    }
    public function store()
    {


        return Food::create([
            'name' => request('name'),
            'carbs' => request('carbs'),
            'fats' => request('fats'),
            'proteins' => request('proteins'),
            'calories' => request('calories'),
            'qty' => request('qty'),
            'um' => request('um')

        ]);
    }
    public function update($id)
    {

        $food = Food::findOrFail($id);

        // $food->update([
        //     'name' => request('name'),
        //     'carbs' => request('carbs'),
        //     'fats' => request('fats'),
        //     'proteins' => request('proteins'),
        //     'calories' => request('calories'),
        //     'qty' => request('qty'),
        //     'um' => request('um')
        // ]);
        return $food;
    }
}
