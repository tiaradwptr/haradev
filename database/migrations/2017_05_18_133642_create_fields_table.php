<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fields', function(Blueprint $table)
		{
			//
			$table->increments('id');
			//FK customer
			$table->integer('farmer_cif');

			$table->float('land_area');
			$table->boolean('use_gps');
			//FK Location
			$table->integer('location_id');
			//FK Master ownership
			$table->integer('ownership_id');
			$table->integer('usage_span');
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
		Schema::drop('fields');
	}

}
