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
        Schema::create('puzzles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('picture');
            $table->string('answer');
            $table->unsignedBigInteger('user_added');
            $table->integer('numberOfGames');
            $table->integer('numberOfHits');
            $table->foreign('user_added')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puzzles');
    }
};
