<?php

use Illuminate\Database\Migrations\Migration;

class CreatePost extends Migration {

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
			$table->integer('thread_id');
			$table->integer('user_id'); // user id of the creator of the post
			$table->integer('character_id'); // which character the post is for (0 if it is OOC)
			$table->text('entry'); // markdown entry for the post text 
			$table->integer('editor'); // last user_id of the person who edited the post
			$table->string('reason', 100);  // the reason the post was edited
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