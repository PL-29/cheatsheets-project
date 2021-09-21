<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_spaces', function (Blueprint $table) {
            $table->id();
            $table->boolean('created');
            $table->boolean('liked');
            $table->boolean('saved');
            $table->integer('users_id');
            $table->integer('cheatsheet_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('cheatsheet_id')->references('id')->on('cheatsheets');
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
        Schema::dropIfExists('personal_spaces');
    }
}
