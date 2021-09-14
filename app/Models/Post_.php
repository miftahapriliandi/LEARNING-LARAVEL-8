<?php

namespace App\Models;

class post
{

    private static $blog_posts =
    [
        [
            "title" => "First Blog Title",
            "slug" => "first-blog-title",
            "author" => "Miftah Apriliandi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est velit, officiis laudantium quia illo exercitationem in temporibus repudiandae facilis molestiae illum incidunt nobis ipsum! Sit quis debitis, praesentium, impedit sequi adipisci quae ex rerum eos facere autem iusto minima vel et doloremque consequatur aut est, nisi eum quas. Dolore consequuntur ex, velit, alias, magni aspernatur rem quidem culpa iste voluptates commodi illo tempore. Sapiente fuga maxime magnam enim similique aliquam ad error, libero asperiores? Voluptatem quidem dolores aut veniam dolore officia minus qui obcaecati tempore dolorum aperiam minima, aliquid at optio temporibus. Necessitatibus laboriosam possimus alias odit iste, facilis fuga?"
        ],
        [
            "title" => "Second Blog Title",
            "slug" => "second-blog-title",
            "author" => "Alvin Adisatria",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus rem deleniti asperiores illo itaque cum, eveniet, laudantium culpa soluta nemo earum temporibus. Molestias magni recusandae, praesentium accusantium cum sed dolores corrupti provident debitis dignissimos amet mollitia odio architecto, labore nostrum, culpa asperiores aut quisquam quo inventore totam illo at! Aspernatur quis natus adipisci tempore in? Architecto culpa delectus earum ipsa, nisi necessitatibus et vel sint quae qui saepe. Sequi doloribus maiores voluptate dicta ut harum hic at quo aut nulla!"
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
