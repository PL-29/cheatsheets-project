<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsCheatsheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics_cheatsheets', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_id');
            $table->integer('cheatsheet_id');
            $table->foreign('topic_id')->references('id')->on('topics');
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
        Schema::dropIfExists('topics_cheatsheets');
    }
}
