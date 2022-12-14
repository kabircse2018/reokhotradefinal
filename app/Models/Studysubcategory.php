<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studysubcategory extends Model
{
    use HasFactory;
    protected $fillable =[
        'study_id',
        'studysubcategory_slug',
        'studysubcategory_name',
        'studysubcategory_name_jpn',
        'studysubcategory_description',
        'studysubcategory_description_jpn',
        'studysubcategory_meta_name',
        'studysubcategory_meta_keyword',
        'studysubcategory_image_thumbnails',
        'studysubcategory_image',
        'menu_status',
        'created_by',

    ];


    public function study()
    {
        $this->belongsTo(Study::class, 'study_id');
    }






}
