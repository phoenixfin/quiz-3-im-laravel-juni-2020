<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date_modified', 0);
            $table->time('date_created', 0);
            $table->string('title');
            $table->string('content');
            $table->string('slug')->storedAs("lower(replace(title,' ','-'))");
            $table->string('tag');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
