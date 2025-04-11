<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    // $posts = Post::latest()->get();
    return View('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('author', 'category');
    return view('posts', ['title' => 'Posts Category: ' . $category->title, 'posts' => $category->posts]);
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
