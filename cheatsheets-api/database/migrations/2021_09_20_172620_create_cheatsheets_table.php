<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheatsheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheatsheets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('code_snippet');
            $table->text('explanation');
            $table->boolean('public');
            $table->integer('author_id');
            $table->integer('technology_id');
            $table->integer('topic_id')->nullable();
            $table->integer('technology_version_id')->nullable();
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('technology_id')->references('id')->on('technologies');
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('technology_version_id')->references('id')->on('versions');
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
        Schema::dropIfExists('cheatsheets');
    }
}
