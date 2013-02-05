<?php

use Illuminate\Database\Migrations\Migration;

class CreateThread extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads', function($table)
		{
			$table->increments('id');
			$table->integer('forum_id');
			$table->string('title', 100);
			$table->integer('status'); // 0 = open, 1 = closed, 2 = locked
			$table->integer('creator'); // user id of the person who created the thread
			$table->integer('last_poster'); // user id of the person who last posted to the thread
			$table->integer('last_post_date'); // date of the last post
			$table->integer('post_count'); // how many posts in this thread
			$table->integer('view_count'); // how many times has this thread been viewed
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
		Schema::drop('threads');
	}

}