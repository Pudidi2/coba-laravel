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
        

        // User::create([
        //     'name' => 'Zoo Cow We',
        //     'email' => 'jokowe@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Adolf Hitler',
        //     'email' => 'hitler@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
    

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum, soluta asperiores nesciunt dolore animi mollitia sapiente, accusamus minima ex aliquid enim porro non minus iure. Officia, quasi quas sed id delectus a non dicta numquam. Quod reprehenderit dolorum similique neque, blanditiis optio! Modi, accusamus, consectetur excepturi magni amet totam non quas necessitatibus, saepe quod dicta sit aperiam. Rerum ex praesentium, et repudiandae hic accusantium nesciunt nihil quasi voluptate voluptatum voluptatem excepturi cupiditate dolorem ut esse laborum, laudantium deserunt perspiciatis unde repellat suscipit saepe quam deleniti. Assumenda nihil ea, dignissimos cum illum cupiditate!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum, soluta asperiores nesciunt dolore animi mollitia sapiente, accusamus minima ex aliquid enim porro non minus iure. Officia, quasi quas sed id delectus a non dicta numquam. Quod reprehenderit dolorum similique neque, blanditiis optio! Modi, accusamus, consectetur excepturi magni amet totam non quas necessitatibus, saepe quod dicta sit aperiam. Rerum ex praesentium, et repudiandae hic accusantium nesciunt nihil quasi voluptate voluptatum voluptatem excepturi cupiditate dolorem ut esse laborum, laudantium deserunt perspiciatis unde repellat suscipit saepe quam deleniti. Assumenda nihil ea, dignissimos cum illum cupiditate!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum, soluta asperiores nesciunt dolore animi mollitia sapiente, accusamus minima ex aliquid enim porro non minus iure. Officia, quasi quas sed id delectus a non dicta numquam. Quod reprehenderit dolorum similique neque, blanditiis optio! Modi, accusamus, consectetur excepturi magni amet totam non quas necessitatibus, saepe quod dicta sit aperiam. Rerum ex praesentium, et repudiandae hic accusantium nesciunt nihil quasi voluptate voluptatum voluptatem excepturi cupiditate dolorem ut esse laborum, laudantium deserunt perspiciatis unde repellat suscipit saepe quam deleniti. Assumenda nihil ea, dignissimos cum illum cupiditate!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam a neque quas ab id quae rerum, soluta asperiores nesciunt dolore animi mollitia sapiente, accusamus minima ex aliquid enim porro non minus iure. Officia, quasi quas sed id delectus a non dicta numquam. Quod reprehenderit dolorum similique neque, blanditiis optio! Modi, accusamus, consectetur excepturi magni amet totam non quas necessitatibus, saepe quod dicta sit aperiam. Rerum ex praesentium, et repudiandae hic accusantium nesciunt nihil quasi voluptate voluptatum voluptatem excepturi cupiditate dolorem ut esse laborum, laudantium deserunt perspiciatis unde repellat suscipit saepe quam deleniti. Assumenda nihil ea, dignissimos cum illum cupiditate!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}


