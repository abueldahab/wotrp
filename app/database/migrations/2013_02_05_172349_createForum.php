<?php

use Illuminate\Database\Migrations\Migration;

class CreateForum extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forums', function($table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->boolean('is_ic');
			$table->boolean('earn_xp');
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
		Schema::drop('forums');
	}

}