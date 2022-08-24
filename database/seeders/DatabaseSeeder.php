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
        // \App\Models\User::factory(10)->create();

        User::factory(5)->create();

        // User::create([
        //     "name" => "Fajrul Aslim",
        //     "email" => "sedang.ngoding@gmail.com",
        //     "password" => bcrypt("password")
        // ]);

        Category::create([
            "name" => "Frontend Developer",
            "slug" => "frontend-developer",
        ]);
        Category::create([
            "name" => "Backend Developer",
            "slug" => "backend-developer",
        ]);
        Category::create([
            "name" => "Game Developer",
            "slug" => "game-developer",
        ]);
        // Category::factory(3)->create();

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit 1.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempora dolorum nam qui recusandae minus obcaecati sunt. Adipisci asperiores saepe ratione quia molestiae temporibus itaque cum aspernatur dicta nulla debitis numquam explicabo distinctio quo, facere quos aut.</p><p>Voluptas vel nulla cupiditate officia deleniti, consequuntur quisquam magni quaerat repudiandae accusantium quia culpa nesciunt nihil maxime minima. Modi fugit quibusdam sit perferendis neque iusto magni aliquam, aperiam nihil eaque, dolores consequatur iste voluptates sed dignissimos maiores esse.</p>"
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'slug' => 'judul-kedua',
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit 2.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempora dolorum nam qui recusandae minus obcaecati sunt. Adipisci asperiores saepe ratione quia molestiae temporibus itaque cum aspernatur dicta nulla debitis numquam explicabo distinctio quo, facere quos aut.</p><p>Voluptas vel nulla cupiditate officia deleniti, consequuntur quisquam magni quaerat repudiandae accusantium quia culpa nesciunt nihil maxime minima. Modi fugit quibusdam sit perferendis neque iusto magni aliquam, aperiam nihil eaque, dolores consequatur iste voluptates sed dignissimos maiores esse.</p>"
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'user_id' => 1,
        //     'category_id' => 3,
        //     'slug' => 'judul-ketiga',
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit 3.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempora dolorum nam qui recusandae minus obcaecati sunt. Adipisci asperiores saepe ratione quia molestiae temporibus itaque cum aspernatur dicta nulla debitis numquam explicabo distinctio quo, facere quos aut.</p><p>Voluptas vel nulla cupiditate officia deleniti, consequuntur quisquam magni quaerat repudiandae accusantium quia culpa nesciunt nihil maxime minima. Modi fugit quibusdam sit perferendis neque iusto magni aliquam, aperiam nihil eaque, dolores consequatur iste voluptates sed dignissimos maiores esse.</p>"
        // ]);
    }
}
