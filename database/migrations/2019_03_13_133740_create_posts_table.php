<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('post_author');
            $table->timestamp('post_date')-> default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('post_content');
            $table->string('post_title');
            $table->string('post_status');
            $table->string('post_name');
            $table->string('post_type');
            $table->string('post_category');
            $table->timestamps();
            $table->foreign('post_author')->references('id')->on('users');
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
