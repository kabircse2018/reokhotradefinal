<?php

namespace App\Models;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'category_name',
        'category_slug',
        'category_description',
        'menu_status',
        'category_name_jpn',
        'category_description_jpn',

    ];





}
