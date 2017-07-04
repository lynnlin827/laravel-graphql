<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('newsId');
            $table->string('title');
            $table->text('content');
            $table->string('summary');
            $table->integer('userId')->unsigned();
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
            $table->timestamp('publishedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
