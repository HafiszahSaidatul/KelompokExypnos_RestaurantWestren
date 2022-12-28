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

        Rooftop::create([
            'title' => 'Makan Seblak',
            'slug' => 'makan-seblak',
            'excerpt' => 'Makan Seblak di bandung lebih enak',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 2,
            'category_id' => 1
        ]);

        Rooftop::create([
            'title' => 'Makan Bakso',
            'slug' => 'makan-bakso',
            'excerpt' => 'Makan bakso di bandung lebih enak',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 1,
            'category_id' => 2
        ]);

        Rooftop::create([
            'title' => 'Makan Siomay',
            'slug' => 'makan-siomay',
            'excerpt' => 'Makan Siomay di bandung lebih enak',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 1,
            'category_id' => 3
        ]);

        Rooftop::create([
            'title' => 'Makan Batagor',
            'slug' => 'makan-batagor',
            'excerpt' => 'Makan Batagor di bandung lebih enak',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 2,
            'category_id' => 1
        ]);

        Rooftop::create([
            'title' => 'Makan Kupat Tahu',
            'slug' => 'makan-kupat-tahu',
            'excerpt' => 'Makan Batagor di bandung lebih enak',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 2,
            'category_id' => 3
        ]);

        Rooftop::create([
            'title' => 'Makan Ketoprak',
            'slug' => 'makan-ketoprak',
            'excerpt' => 'Makan Ketoprak di bandung lebih enak',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 1,
            'category_id' => 2
        ]);

        Rooftop::create([
            'title' => 'Makan Ayam Geprek',
            'slug' => 'makan-ayam-geprek',
            'excerpt' => 'Makan ayam geprek enak',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt adipisci mollitia veritatis deserunt quam, quaerat dignissimos, voluptatum maxime laudantium rerum libero. Dolorum nemo dolores nostrum ex accusamus ad ducimus amet, voluptatum laudantium dolor obcaecati distinctio eaque delectus quod esse totam quis dolore qui maxime. Doloremque voluptas sint nostrum consectetur natus libero minus suscipit error voluptatum illo, sed sapiente distinctio facilis delectus nulla alias ipsa commodi aut laborum magnam ipsum vitae? Facere inventore officia officiis possimus exercitationem. Corporis, explicabo. Et a neque deleniti, autem voluptates minus distinctio, sed id quisquam, quis iste sapiente. Expedita quos non temporibus consequuntur perferendis atque.',
            'user_id' => 1,
            'category_id' => 2
        ]);
    }
}
