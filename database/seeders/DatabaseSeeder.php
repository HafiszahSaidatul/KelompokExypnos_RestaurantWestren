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
            'slug' => 'breakfast',
            'body' => 'This breakfast menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.'
        ]);

        Category::create([
            'name' => 'Have Lunch',
            'slug' => 'have-lunch',
            'body' => 'This lunch menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.'
        ]);

        Category::create([
            'name' => 'Dinner',
            'slug' => 'dinner',
            'body' => 'This dinner menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.'
        ]);

        Menu::create([
            'nama' => 'Wafel Belgia',
            'slug' => 'wafel-belgia',
            'harga' => '80k',
            'excerpt' => 'Wafel Belgia',
            'body' => 'Wafel Belgia',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Sunny-Side',
            'slug' => 'sunny-side',
            'harga' => '75k',
            'excerpt' => 'Sunny Side',
            'body' => 'Sunny Side',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Scrambled',
            'slug' => 'scrambled',
            'harga' => '95k',
            'excerpt' => 'Scarambled',
            'body' => 'Scrambled',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Spaghetti',
            'slug' => 'spaghetti',
            'harga' => '75k',
            'excerpt' => 'Spaghetti',
            'body' => 'Spaghetti',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Pizza',
            'slug' => 'pizza',
            'harga' => '75k',
            'excerpt' => 'Pizza',
            'body' => 'Pizza',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Pasto Matto',
            'slug' => 'pasto-matto',
            'harga' => '75k',
            'excerpt' => 'Pasto Matto',
            'body' => 'Pasto Matto',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Roast Matto',
            'slug' => 'roast-matto',
            'harga' => '75k',
            'excerpt' => 'Roast Matto',
            'body' => 'Roast Matto',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Steak Matto',
            'slug' => 'steak-matto',
            'harga' => '75k',
            'excerpt' => 'Steak Matto',
            'body' => 'Steak Matto',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'SalmonTos',
            'slug' => 'salmontos',
            'harga' => '75k',
            'excerpt' => 'SalmonTos',
            'body' => 'SalmonTos',
            'category_id' => 3,
            'user_id' => 1
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
