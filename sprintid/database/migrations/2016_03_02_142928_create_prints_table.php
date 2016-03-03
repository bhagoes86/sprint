<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prints', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('place_id');
			$table->string('code');
			$table->string('text_note');
			$table->string('url_file');
			$table->tinyInteger('type_print');
			$table->integer('money_spend');
			$table->boolean('is_printed');
            $table->dateTime('time_print');
            $table->dateTime('time_pick');
			$table->softDeletes();
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
		Schema::drop('prints');
	}

}
