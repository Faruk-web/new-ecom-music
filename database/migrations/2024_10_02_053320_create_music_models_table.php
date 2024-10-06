<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_models', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id')->default(0);
            $table->integer('category_id')->default(0);
            $table->integer('position')->default(1);
            $table->string('image')->nullable();
            $table->string('audio')->nullable();
            $table->string('video')->nullable();
            $table->text('description')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('music_models');
    }
}
