<?php

use Illuminate\Support\Arr;
use Illuminate\View\ViewName;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhammad Umar', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return View('posts', ['title' => 'Blog Page', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Muhammad Umar',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis fugit doloremque sapiente voluptatem itaque cumque commodi eligendi neque delectus illum possimus iure aspernatur laborum expedita aliquam earum, repudiandae voluptatum alias.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Kezia Amara',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem excepturi culpa esse nemo aperiam quidem possimus libero asperiores maiores temporibus? Delectus voluptatum mollitia iusto rerum eaque reprehenderit harum laborum officia?'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
        'email' => 'justnuqthoh@gmail.com',
        'phone' => '0821-4142-3737',
        'github' => 'mubaihaqi',
        'treads' => 'haq_xgi',
        'instagram' => '@haq_xgi'
    ]);
});
