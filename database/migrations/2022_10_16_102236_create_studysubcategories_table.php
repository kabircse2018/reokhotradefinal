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
        Schema::create('studysubcategories', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('study_id');
            $table->string('studysubcategory_slug')->nullable();
            $table->string('studysubcategory_name')->nullable();
            $table->string('studysubcategory_name_jpn')->nullable();
            $table->longText('studysubcategory_description')->nullable();
            $table->longText('studysubcategory_description_jpn')->nullable();
            $table->string('studysubcategory_meta_name')->nullable();
            $table->string('studysubcategory_meta_keyword')->nullable();
            $table->longText('studysubcategory_meta_description')->nullable();
            $table->string('studysubcategory_image')->nullable()->default(12);
            $table->string('studysubcategory_image_thumbnails')->nullable()->default(12);
            $table->tinyInteger('menu_status')->nullable();
            $table->integer('created_by');
            $table->timestamps();
            $table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studysubcategories');
    }
};
