<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
use App\models\Category;
use App\models\Post;

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
            'name' => 'Rysa Laksana',
            'username' => 'rysalaksana',
            'email' => 'rysa@gmail.com',
            'password' => bcrypt('password')
        ]);


        // User::create([
        //     'name' => 'Cak Sunar',
        //     'email' => 'caksunar@gamil.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Trending',
            'slug' => 'trending'
        ]);

        Category::create([
            'name' => 'Hots',
            'slug' => 'hot'
        ]);

        Category::create([
            'name' => 'Info',
            'slug' => 'info'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul ke 1 Trending',
        //     'slug' => 'judul-kesatu-trending',
        //     'excerpt' => 'pertama asdlhasldkhlkLorem ipsum dolor ke sit amet consectetur adipisicing elit. Fuga asperiores accusantium ut nam earum eveniet soluta iste tempora eius, deleniti totam magnam natus excepturi laborum velit ullam nostrum iusto doloribus debitis, nisi quos numquam unde',
        //     'body' => '<p>asdasdasdLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga asperiores accusantium ut nam earum eveniet soluta iste tempora eius, deleniti totam magnam natus excepturi laborum velit ullam nostrum iusto doloribus debitis, nisi quos numquam unde animi et. Nemo blanditiis fugiat nisi similique numquam ut eius necessitatibus temporibus qui cupiditate maxime corrupti culpa, nam impedit dolore perferendis amet! Similique atque rem saepe. Possimus reprehenderit doloribus, dolore dolores, deserunt voluptatem assumenda impedit provident ratione, quasi a veritatis tenetur.</p><p>Aut quasi quas, cupiditate dolorum velit iste, asperiores architecto, quia quaerat repellendus quo saepe incidunt enim? Sint atque deleniti in, saepe nulla et illum dicta impedit, quam molestiae provident nesciunt deserunt officiis maiores amet esse reiciendis architecto quis maxime modi sit. Sapiente, temporibus molestiae. Excepturi asdasdcupiditate totam veritatis quidem necessitatibus, voluptatibus reprehenderit animi asperiores suscipit maxime? Natus beatae</p> <p>deleniti eum laboriosam ipsum possimus, iste quisquam exercitationem eaque numquam aperiam amet, in maiores fugit placeat distinctio aliquam tenetur iure impedit corporis, modi accusamus et maxime. Voluptatibus adipisci maiores odio esse, reprehenderit mollitia ipsum, enim, inventore ipsa commodi deleniti? Repudiandae laborum soluta impedit. Ipsa, velit optio.</p> ',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul ke 1 Hots',
        //     'slug' => 'judul-kesatu-hots',
        //     'excerpt' => 'pertama asdlhasldkhlkLorem ipsum dolor ke sit amet consectetur adipisicing elit. Fuga asperiores accusantium ut nam earum eveniet soluta iste tempora eius, deleniti totam magnam natus excepturi laborum velit ullam nostrum iusto doloribus debitis, nisi quos numquam unde',
        //     'body' => '<p>asdasdasdLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga asperiores accusantium ut nam earum eveniet soluta iste tempora eius, deleniti totam magnam natus excepturi laborum velit ullam nostrum iusto doloribus debitis, nisi quos numquam unde animi et. Nemo blanditiis fugiat nisi similique numquam ut eius necessitatibus temporibus qui cupiditate maxime corrupti culpa, nam impedit dolore perferendis amet! Similique atque rem saepe. Possimus reprehenderit doloribus, dolore dolores, deserunt voluptatem assumenda impedit provident ratione, quasi a veritatis tenetur.</p><p>Aut quasi quas, cupiditate dolorum velit iste, asperiores architecto, quia quaerat repellendus quo saepe incidunt enim? Sint atque deleniti in, saepe nulla et illum dicta impedit, quam molestiae provident nesciunt deserunt officiis maiores amet esse reiciendis architecto quis maxime modi sit. Sapiente, temporibus molestiae. Excepturi asdasdcupiditate totam veritatis quidem necessitatibus, voluptatibus reprehenderit animi asperiores suscipit maxime? Natus beatae</p> <p>deleniti eum laboriosam ipsum possimus, iste quisquam exercitationem eaque numquam aperiam amet, in maiores fugit placeat distinctio aliquam tenetur iure impedit corporis, modi accusamus et maxime. Voluptatibus adipisci maiores odio esse, reprehenderit mollitia ipsum, enim, inventore ipsa commodi deleniti? Repudiandae laborum soluta impedit. Ipsa, velit optio.</p> ',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul ke 1 Info',
        //     'slug' => 'judul-kesatu-info',
        //     'excerpt' => 'pertama asdlhasldkhlkLorem ipsum dolor ke sit amet consectetur adipisicing elit. Fuga asperiores accusantium ut nam earum eveniet soluta iste tempora eius, deleniti totam magnam natus excepturi laborum velit ullam nostrum iusto doloribus debitis, nisi quos numquam unde',
        //     'body' => '<p>asdasdasdLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga asperiores accusantium ut nam earum eveniet soluta iste tempora eius, deleniti totam magnam natus excepturi laborum velit ullam nostrum iusto doloribus debitis, nisi quos numquam unde animi et. Nemo blanditiis fugiat nisi similique numquam ut eius necessitatibus temporibus qui cupiditate maxime corrupti culpa, nam impedit dolore perferendis amet! Similique atque rem saepe. Possimus reprehenderit doloribus, dolore dolores, deserunt voluptatem assumenda impedit provident ratione, quasi a veritatis tenetur.</p><p>Aut quasi quas, cupiditate dolorum velit iste, asperiores architecto, quia quaerat repellendus quo saepe incidunt enim? Sint atque deleniti in, saepe nulla et illum dicta impedit, quam molestiae provident nesciunt deserunt officiis maiores amet esse reiciendis architecto quis maxime modi sit. Sapiente, temporibus molestiae. Excepturi asdasdcupiditate totam veritatis quidem necessitatibus, voluptatibus reprehenderit animi asperiores suscipit maxime? Natus beatae</p> <p>deleniti eum laboriosam ipsum possimus, iste quisquam exercitationem eaque numquam aperiam amet, in maiores fugit placeat distinctio aliquam tenetur iure impedit corporis, modi accusamus et maxime. Voluptatibus adipisci maiores odio esse, reprehenderit mollitia ipsum, enim, inventore ipsa commodi deleniti? Repudiandae laborum soluta impedit. Ipsa, velit optio.</p> ',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
