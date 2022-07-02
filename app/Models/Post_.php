<?php

namespace App\Models;


class Post
{
    private static  $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-slug-pertama",
            "author" => "Rysa Laksana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quos cum sequi dignissimos. Architecto corporis debitis ratione, fugit iste quisquam non? Quo, qui officiis? Necessitatibus quos provident, culpa beatae nam possimus voluptatum minus vitae reiciendis voluptas voluptates modi ducimus deserunt aperiam cupiditate. Earum, amet. Tempora doloremque illum atque placeat quas possimus ut quidem nesciunt ea repellendus! Tenetur quas tempora quos similique aspernatur corrupti, laudantium perspiciatis molestias dolores et officia recusandae ipsa eligendi sapiente voluptates quae voluptate fuga optio repudiandae hic?"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-slug-kedua",
            "author" => "Cak Sunar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquid animi cupiditate et dolor vero reprehenderit nemo molestias maiores, minima cum quam repudiandae, rerum accusantium pariatur cumque! Labore provident officia voluptas magni quidem aliquam accusamus, sapiente voluptatum reiciendis fugiat nostrum, culpa expedita asperiores necessitatibus? Quidem labore eveniet dicta enim, esse aliquid perferendis fugit sed magnam illum assumenda ad maxime sequi cupiditate cumque, eum ullam! Rerum voluptatem molestias necessitatibus error animi voluptatibus expedita, cupiditate reprehenderit, dolor quos eaque id provident quisquam maiores ratione repudiandae, corrupti asperiores explicabo ea. Natus corporis recusandae nulla ullam voluptatum officia ab necessitatibus nam, ratione rem porro."
        ],

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
