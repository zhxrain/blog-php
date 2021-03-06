<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('posts', function($table)
    {
      $table->increments('id');
      $table->string('title')->unique();
      $table->string('summary')->nullable();
      $table->string('status')->nullable();
      $table->string('author', 32)->nullable();
      $table->string('markdown', 20480)->nullable();
      $table->string('tags')->nullable();
      $table->string('category')->nullable();
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
    Schema::drop('posts');
	}

}
