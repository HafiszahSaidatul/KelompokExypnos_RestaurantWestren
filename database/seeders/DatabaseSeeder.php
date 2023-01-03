<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Rooftop;

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

        User::create([
            'name' => 'Alfi Syahrin',
            'username' => 'alfisyah',
            'email' => 'alfisyah@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Breakfast',
            'slug' => 'breakfast',
            'body' => 'This breakfast menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.'
        ]);

        Category::create([
            'name' => 'Lunch',
            'slug' => 'lunch',
            'body' => 'This lunch menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.'
        ]);

        Category::create([
            'name' => 'Dinner',
            'slug' => 'dinner',
            'body' => 'This dinner menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.'
        ]);

        Menu::create([
            'nama' => 'Wafel Belgia',
            'slug' => 'wafel belgia',
            'harga' => 'Rp. 80.999',
            'excerpt' => 'Wafel Belgia',
            'body' => 'Wafel Belgia',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Sunny-Side',
            'slug' => 'sunny side',
            'harga' => 'Rp. 79.999',
            'excerpt' => 'Sunny Side',
            'body' => 'Sunny Side',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Scrambled',
            'slug' => 'scrambled',
            'harga' => 'Rp. 60.999',
            'excerpt' => 'Scarambled',
            'body' => 'Scrambled',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Spaghetti',
            'slug' => 'spaghetti',
            'harga' => 'Rp. 60.999',
            'excerpt' => 'Spaghetti',
            'body' => 'Spaghetti',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Pizza',
            'slug' => 'pizza',
            'harga' => 'Rp. 108.999',
            'excerpt' => 'Pizza',
            'body' => 'Pizza',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Pasto Matto',
            'slug' => 'pasto-matto',
            'harga' => 'Rp. 50.999',
            'excerpt' => 'Pasto Matto',
            'body' => 'Pasto Matto',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Roast Matto',
            'slug' => 'roast-matto',
            'harga' => 'Rp. 40.999',
            'excerpt' => 'Roast Matto',
            'body' => 'Roast Matto',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'Steak Matto',
            'slug' => 'steak-matto',
            'harga' => 'Rp. 150.999',
            'excerpt' => 'Steak Matto',
            'body' => 'Steak Matto',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Menu::create([
            'nama' => 'SalmonTos',
            'slug' => 'salmontos',
            'harga' => 'Rp. 170.999',
            'excerpt' => 'SalmonTos',
            'body' => 'SalmonTos',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Rooftop::create([
            'title' => 'Noon-Lunch',
            'slug' => 'noon lunch',
            'excerpt' => 'Get here by 5pm to Enjoy Happy Hours that last till 8pm',
            'body' => 'Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 2,
            'category_id' => 1
        ]);

        Rooftop::create([
            'title' => 'Noon Lunch',
            'slug' => 'noon-lunch',
            'excerpt' => 'Lunch moments starts right from 11.30am to 2.30pm; last order at 1.30pm.',
            'body' => 'Marvel at out witty, fun but extremely humble Chef with the culinary gift from the heavens. Each ensemble of dishes picked, matched and poised at the exact moments that make you forget your remainder of the 8 to 5 regime.
                       Ingredients freshly picked and assorted on a daily basis, every crunch is freshness exploited for momentary bliss that gets renewed at the next dish.',
            'user_id' => 1,
            'category_id' => 2
        ]);

        Rooftop::create([
            'title' => 'The Sparkle – Dinner',
            'slug' => 'the sparkle-dinner',
            'excerpt' => 'Dinner Menu starts at 6pm and ends with the last order at 9pm.',
            'body' => 'Sit by our metre long poolside, as you watch the lights glistening orange through the delicate blue pool. Enjoy a cocktail before you have your dinner or the other way round. You are free to experience the moment the way you deem fit. Regardless, we will host you as you prefer. Book the tables early and plan your time right though!
                    Our chef harmonises his dishes with the time of the day. Embark on a completely different adventure at night. With the cool breeze, and a much lighter spirit, our chef believes, your taste buds adapts to a bigger challenge. ',
            'user_id' => 1,
            'category_id' => 3
        ]);

        Rooftop::create([
            'title' => 'Private Moments',
            'slug' => 'private-moments',
            'excerpt' => 'Breakfast moments starts right from 07.00am to 10.30am, last order at 11.30pm.',
            'body' => 'private placebo mediates for an intimate setting. Though just drinks, appetizers and ala-carte dishes are served here, it is the perfect start or end to the day. Move onto the placebo after or before your Omakase dinner and be wing manned by our poolside which brings enough chills so that you and your partner have no choice, but to have to get closer together.',
            'user_id' => 2,
            'category_id' => 1
        ]);
    }
}
