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
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('study_name')->nullable();
            $table->string('study_name_jpn')->nullable();
            $table->string('study_slug')->nullable();
            $table->string('study_meta_name')->nullable();
            $table->string('study_meta_keyword')->nullable();
            $table->longText('study_meta_description')->nullable();
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
        Schema::dropIfExists('studies');
    }
};
