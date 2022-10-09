<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userA = User::create(
            [
                'name' => 'John',
                'email' => 'jogndoge.com',
                'password' => bcrypt('password')
            ]
        );
        $userB = User::create(
            [
                'name' => 'Meline',
                'email' => 'melina@rose.com',
                'password' => bcrypt('password')
            ]
        );


        $foodA = Food::create([

            "name" => 'Milk',
            "carbs" => 10,
            "fats" => 4,
            "proteins" => 3,
            "calories" => 100,
            "um" => 'ml',
            "qty" => 100,
            "user_id" => $userA->id
        ]);


        $foodB = Food::create([

            "name" => 'Milk',
            "carbs" => 10,
            "fats" => 4,
            "proteins" => 3,
            "calories" => 100,
            "um" => 'ml',
            "qty" => 100,
            "user_id" => $userB->id
        ]);

        // dd($userA->foods);
    }
}
