<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable =[
        'blog_slug',
        'blog_name',
        'blog_name_jpn',
        'blog_description',
        'blog_description_jpn',
        'blog_meta_name',
        'blog_meta_keyword',
        'blog_image_thumbnails',
        'blog_image',
        'menu_status',
        'created_by',

    ];
}
