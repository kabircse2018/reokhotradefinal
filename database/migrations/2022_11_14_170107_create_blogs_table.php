<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_slug')->nullable();
            $table->string('blog_name')->nullable();
            $table->string('blog_name_jpn')->nullable();
            $table->longText('blog_description')->nullable();
            $table->longText('blog_description_jpn')->nullable();
            $table->string('blog_meta_name')->nullable();
            $table->string('blog_meta_keyword')->nullable();
            $table->longText('blog_meta_description')->nullable();
            $table->string('blog_image')->nullable()->default(12);
            $table->string('blog_image_thumbnails')->nullable()->default(12);
            $table->tinyInteger('menu_status')->nullable();
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
