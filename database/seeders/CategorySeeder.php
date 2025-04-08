<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'title' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'title' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);
        Category::create([
            'title' => 'Game Programming',
            'slug' => 'game-programming'
        ]);
        Category::create([
            'title' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
    }
}
