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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name')->nullable();
            $table->string('service_slug')->nullable();
            $table->string('service_meta_name')->nullable();
            $table->string('service_meta_keyword')->nullable();
            $table->string('service_name_jpn')->nullable();
            $table->longText('service_meta_description')->nullable();
            $table->longText('service_description')->nullable();
            $table->longText('service_description_jpn')->nullable();
            $table->string('service_image_thumbnails')->nullable()->default(12);
            $table->string('service_image')->nullable()->default(12);
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
        Schema::dropIfExists('services');
    }
};
