<?php

use App\Models\Post;
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
    return View('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

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
