<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewName;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhammad Umar', 'title' => 'About Page']);
});

Route::get('/blog', function () {
    return View('blog', ['title' => 'Blog Page']);
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
