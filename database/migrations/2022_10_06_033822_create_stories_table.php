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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('SectionTitle')->nullable();
            $table->string('image1')->nullable();
            $table->string('title1')->nullable();
            $table->string('date1')->nullable();
            $table->string('dec1', 500)->nullable();
            $table->string('image2')->nullable();
            $table->string('title2')->nullable();
            $table->string('date2')->nullable();
            $table->string('dec2', 500)->nullable();
            $table->string('image3')->nullable();
            $table->string('title3')->nullable();
            $table->string('date3')->nullable();
            $table->string('dec3', 500)->nullable();
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
        Schema::dropIfExists('stories');
    }
};
