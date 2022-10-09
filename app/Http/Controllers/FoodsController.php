<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    public function index()
    {
        // dd(request()->user());
        // return Food::paginate();
        return request()->user()->foods()->paginate();
    }

    public function takeId($id)
    {


        return  Food::find($id);
    }
    public function store()
    {

        request()->validate([
            'name' => ['required', 'string'],
            'carbs' => ['required', 'numeric', 'min:0'],
            'proteins' => ['required', 'numeric', 'min:0'],
            'fats' => ['required', 'numeric', 'min:0'],
            'calories' => ['required', 'numeric', 'min:0'],
            'qty' => ['required', 'numeric', 'min:0'],
            'um' => ['required', 'string', 'in:g,pc,ml,oz'],
        ], ["um.in" => 'Selected unit of measure  is invalid.Only g,pc,ml, and oz are allowed.']);

        return Food::create([
            'name' => request('name'),
            'carbs' => request('carbs'),
            'fats' => request('fats'),
            'proteins' => request('proteins'),
            'calories' => request('calories'),
            'qty' => request('qty'),
            'um' => request('um'),
            'user_id' => request()->user()->id

        ]);
    }
    public function update($id)
    {


        $food = request()->user()->foods()->findOrFail($id);

        $food->update([
            'name' => request('name'),
            'carbs' => request('carbs'),
            'fats' => request('fats'),
            'proteins' => request('proteins'),
            'calories' => request('calories'),
            'qty' => request('qty'),
            'um' => request('um')
        ]);
        return $food;
    }
    public function delete($id)


    {


        $food = request()->user()->foods()->findOrFail($id);

        $food->delete();

        return response()->json(['message' => 'Record deleted']);
    }
}
