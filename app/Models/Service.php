<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_slug',
        'service_name_jpn',
        'service_description',
        'service_description_jpn',
        'service_image_thumbnails',
        'service_image',
        'menu_status',
        'created_by',
    ];


}
