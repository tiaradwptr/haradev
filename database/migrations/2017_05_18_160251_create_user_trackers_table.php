<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTrackersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_trackers', function(Blueprint $table)
		{
			//
			$table->increments('id');
			//FK user
			$table->integer('user_id');
			//FK transaction type
			$table->integer('transactiontype_id');
			$table->string('coordinate');
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
		Schema::drop('user_trackers');
	}

}
