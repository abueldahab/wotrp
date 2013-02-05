<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostTags extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_tags', function($table)
		{
			$table->increments('id');
			$table->integer('post_id');
			$table->integer('tag_id');
			$this->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post_tags');
	}

}