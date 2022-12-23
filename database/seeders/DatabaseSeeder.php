<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Egi Rahayu',
            'username' => 'egirahayu',
            'email' => 'egirahayu@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'Breakfast',
            'slug' => 'breakfast'
        ]);

        Category::create([
            'name' => 'Have Lunch',
            'slug' => 'have-lunch'
        ]);

        Category::create([
            'name' => 'Dinner',
            'slug' => 'dinner'
        ]);
    }
}
