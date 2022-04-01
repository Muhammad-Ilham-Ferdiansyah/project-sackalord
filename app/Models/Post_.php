<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, voluptates voluptas. Cumque nulla alias deleniti at maxime velit enim quos, cum quisquam excepturi, unde ex fuga exercitationem doloribus voluptatum hic eveniet in, tempore corrupti laborum atque illo. Tenetur dicta, optio tempore magni iure nemo cum incidunt impedit velit obcaecati deserunt totam dignissimos nostrum molestias eveniet eum iste non dolorum quos quae quidem. Quas, necessitatibus blanditiis. Fuga molestias commodi ipsum dolor voluptatem quod in, quos modi eos nesciunt sunt, tenetur rerum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Ilham",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, voluptates voluptas. Cumque nulla alias deleniti at maxime velit enim quos, cum quisquam excepturi, unde ex fuga exercitationem doloribus voluptatum hic eveniet in. Ipsum dolor, sit amet consectetur adipisicing elit. Iusto, voluptates voluptas. Cumque nulla alias deleniti at maxime velit enim quos, cum quisquam excepturi, unde ex fuga exercitationem doloribus voluptatum hic eveniet in, tempore corrupti laborum atque illo. Tenetur dicta, optio tempore magni iure nemo cum incidunt impedit velit obcaecati deserunt totam dignissimos nostrum molestias eveniet eum iste non dolorum quos quae quidem. Quas, necessitatibus blanditiis. Fuga molestias commodi ipsum dolor voluptatem quod in, quos modi eos nesciunt sunt, tenetur rerum."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Dedi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, voluptates voluptas. Cumque nulla alias deleniti at maxime velit enim quos, cum quisquam excepturi, unde ex fuga exercitationem doloribus voluptatum hic eveniet in. Ipsum dolor, sit amet consectetur adipisicing elit. Iusto, voluptates voluptas. Cumque nulla alias deleniti at maxime velit enim quos, cum quisquam excepturi, unde ex fuga exercitationem doloribus voluptatum hic eveniet in, tempore corrupti laborum atque illo. Tenetur dicta, optio tempore magni iure nemo cum incidunt impedit velit obcaecati deserunt totam dignissimos nostrum molestias eveniet eum iste non dolorum quos quae quidem. Quas, necessitatibus blanditiis. Fuga molestias commodi ipsum dolor voluptatem quod in, quos modi eos nesciunt sunt, tenetur rerum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
