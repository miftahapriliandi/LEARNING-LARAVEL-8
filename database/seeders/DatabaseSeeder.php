<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // // User::create([
        // //     'name' => 'Miftah Apriliandi',
        // //     'email' => 'miftahapriliandi@gmail.com',
        // //     'password' => bcrypt('12345')
        // // ]);

        // // User::create([
        // //     'name' => 'Alvin Adisatria',
        // //     'email' => 'alvinadisatria@gmail.com',
        // //     'password' => bcrypt('12345')
        // // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'First Title',
        //     'slug' => 'first-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, porro? Delectus perspiciatis officiis ab, recusandae repellat cum veniam expedita consequuntur?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo distinctio provident sit nobis repudiandae neque nulla. Omnis deleniti maiores aut debitis harum facilis dolores voluptates iusto incidunt repellat, sed vero?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi amet reiciendis nostrum corrupti! Voluptatem accusamus magnam, placeat ullam temporibus nulla quasi culpa praesentium possimus? Cupiditate, recusandae. Labore a nulla, ipsam impedit, corporis debitis reprehenderit quidem magnam, quia porro adipisci culpa nesciunt maxime tempore sint veritatis eaque! Laborum at eligendi molestias.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Second Title',
        //     'slug' => 'second-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, porro? Delectus perspiciatis officiis ab, recusandae repellat cum veniam expedita consequuntur?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo distinctio provident sit nobis repudiandae neque nulla. Omnis deleniti maiores aut debitis harum facilis dolores voluptates iusto incidunt repellat, sed vero?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi amet reiciendis nostrum corrupti! Voluptatem accusamus magnam, placeat ullam temporibus nulla quasi culpa praesentium possimus? Cupiditate, recusandae. Labore a nulla, ipsam impedit, corporis debitis reprehenderit quidem magnam, quia porro adipisci culpa nesciunt maxime tempore sint veritatis eaque! Laborum at eligendi molestias.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Third Title',
        //     'slug' => 'third-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, porro? Delectus perspiciatis officiis ab, recusandae repellat cum veniam expedita consequuntur?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo distinctio provident sit nobis repudiandae neque nulla. Omnis deleniti maiores aut debitis harum facilis dolores voluptates iusto incidunt repellat, sed vero?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi amet reiciendis nostrum corrupti! Voluptatem accusamus magnam, placeat ullam temporibus nulla quasi culpa praesentium possimus? Cupiditate, recusandae. Labore a nulla, ipsam impedit, corporis debitis reprehenderit quidem magnam, quia porro adipisci culpa nesciunt maxime tempore sint veritatis eaque! Laborum at eligendi molestias.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
