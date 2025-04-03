<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'nama_table'; //kalau misal di database nya pakai nama lain

    protected $fillable = [
        'title',
        'author',
        'slug',
        'body'
    ];
}
