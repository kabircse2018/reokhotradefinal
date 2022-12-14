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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('gallery_name')->nullable();
            $table->string('gallery_slug')->nullable();
            $table->string('gallery_meta_name')->nullable();
            $table->string('gallery_meta_keyword')->nullable();
            $table->string('gallery_name_jpn')->nullable();
            $table->longText('gallery_meta_description')->nullable();
            $table->longText('gallery_description')->nullable();
            $table->longText('gallery_description_jpn')->nullable();
            $table->string('gallery_image_thumbnails')->nullable()->default(12);
            $table->string('gallery_image')->nullable()->default(12);
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
        Schema::dropIfExists('galleries');
    }
};
