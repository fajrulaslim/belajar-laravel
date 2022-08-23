<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Fajrul Aslim",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi ullam quia porro necessitatibus iure consequuntur ratione quas error doloribus illum, velit, deserunt consectetur numquam aspernatur commodi, cum harum nemo eos? Aliquam mollitia enim consectetur dolore eum incidunt magni fugiat quidem ea dolor dolorem, illo explicabo aperiam, adipisci accusamus amet optio!"
        ],        
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Fajrul Aslim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempora dolorum nam qui recusandae minus obcaecati sunt. Adipisci asperiores saepe ratione quia molestiae temporibus itaque cum aspernatur dicta nulla debitis numquam explicabo distinctio quo, facere quos aut. Voluptas vel nulla cupiditate officia deleniti, consequuntur quisquam magni quaerat repudiandae accusantium quia culpa nesciunt nihil maxime minima. Modi fugit quibusdam sit perferendis neque iusto magni aliquam, aperiam nihil eaque, dolores consequatur iste voluptates sed dignissimos maiores esse."
        ]
    ];

    // Post::create([
    //     'title' => 'Judul Pertama',
    //     'slug' => "judul-pertama",
    //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempora dolorum nam qui recusandae minus obcaecati sunt. Adipisci asperiores saepe ratione quia molestiae temporibus itaque cum aspernatur dicta nulla debitis numquam explicabo distinctio quo, facere quos aut.</p><p>Voluptas vel nulla cupiditate officia deleniti, consequuntur quisquam magni quaerat repudiandae accusantium quia culpa nesciunt nihil maxime minima. Modi fugit quibusdam sit perferendis neque iusto magni aliquam, aperiam nihil eaque, dolores consequatur iste voluptates sed dignissimos maiores esse.</p>"

    // ])

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }        
        // return $post;
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
