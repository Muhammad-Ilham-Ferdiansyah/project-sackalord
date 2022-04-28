<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
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
        User::factory(3)->create();

        User::create([
            'name' => 'Muhammad Ilham Ferdiansyah',
            'username' => 'ilhamferdx',
            'email' => 'ilhamferdiansyah737@gmail.com',
            'image' => 'profile-images/default.jpg',
            'password' => bcrypt('password123')
        ]);
        // User::create([
        //     'name' => 'Dedi Hidayat Siregar',
        //     'email' => 'dedihidayat333@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis non ratione consequuntur est eum itaque alias vero illo laudantium iure! Suscipit ex incidunt,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis non ratione consequuntur est eum itaque alias vero illo laudantium iure! Suscipit ex incidunt, natus, tempora iusto assumenda adipisci corrupti consectetur, aliquam perspiciatis soluta quis odit eum sed laborum quia quasi! Quis exercitationem vero minima unde fugit id molestiae facilis mollitia voluptatem asperiores velit, animi ipsa perspiciatis quas pariatur. Sed cupiditate vero nobis quaerat pariatur delectus enim molestias maxime inventore sunt, eligendi perferendis at, asperiores numquam ipsum labore quam deleniti distinctio possimus. Distinctio placeat perferendis fuga magni incidunt, et, consequuntur modi, voluptatum numquam ex ducimus? Velit repellat odio aspernatur explicabo maxime!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
