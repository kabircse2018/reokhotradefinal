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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_name')->nullable();
            $table->string('about_slug')->nullable();
            $table->string('about_meta_name')->nullable();
            $table->string('about_meta_keyword')->nullable();
            $table->string('about_name_jpn')->nullable();
            $table->longText('about_meta_description')->nullable();
            $table->longText('about_description')->nullable();
            $table->longText('about_description_jpn')->nullable();
            $table->string('about_image_thumbnails')->nullable()->default(12);
            $table->string('about_image')->nullable()->default(12);
            $table->tinyInteger('menu_status')->default('0');
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
        Schema::dropIfExists('abouts');
    }
};
