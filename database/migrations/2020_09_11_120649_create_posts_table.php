<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('fullname');
            $table->date('birth_date')->nullable();
            $table->date('death_date')->nullable();
            $table->string('birth_date_maually');
            $table->string('death_date_maually');
            $table->string('birth_place');
            $table->string('death_place');
            $table->integer('category_id');
            $table->string('image');
            $table->string('description');
            $table->text('full_text');
            $table->integer('top_slider')->nullable();
            $table->integer('low_slider')->nullable();
            $table->string('tags');
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
        Schema::dropIfExists('posts');
    }
}
