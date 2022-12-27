<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Menu;

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

        Menu::create([
            'nama' => 'Sandwich',
            'slug' => 'sandwich',
            'harga' => 'Rp. 100.000',
            'body' => 'Sandwich adalah makanan asal',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Nasi Padang',
            'slug' => 'nasi-padang',
            'harga' => 'Rp. 100.000',
            'body' => 'Nasi Padang adalah makanan asal',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Salad Buah',
            'slug' => 'salad-buah',
            'harga' => 'Rp. 100.000',
            'body' => 'Salad buah adalah makanan asal',
            'category_id' => 3,
            'user_id' => 1
        ]);
    }
}
