<?php

use Illuminate\Database\Migrations\Migration;

class CreateCharacter extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('characters', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('name', 100);
			$table->string('race', 5);
			$table->string('nation_of_birth', 50);
			$table->string('city_of_birth', 100);
			$table->integer('age');
			$table->string('gender', 1);
			$table->boolean('is_df');
			$table->string('affiliation', 100);
			$table->text('description');
			$table->text('history');
			$table->text('short_term');
			$table->text('long_term');
			$table->text('notes');
			$table->text('admin_notes');
			$table->integer('level');
			$table->integer('current_xp');
			$table->integer('next_level_xp');
			$table->text('attributes'); //json string
			$table->text('skills'); // json string
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
		Schema::drop('characters');
	}

}