<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Muhammad Umar',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis fugit doloremque
            sapiente voluptatem itaque cumque commodi eligendi neque delectus illum possimus iure aspernatur laborum expedita aliquam earum, repudiandae voluptatum alias.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Kezia Amara',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem excepturi culpa esse nemo aperiam quidem possimus libero asperiores maiores temporibus? Delectus voluptatum mollitia iusto rerum eaque reprehenderit harum laborum officia?'
            ]
        ];
    }

    public static function find($slug): array
    {
        // Arr::first(Post::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug); //menggunakan arow function tidak mengikuti kaidah scoope variabel

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
