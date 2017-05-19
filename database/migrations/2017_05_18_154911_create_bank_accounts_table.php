<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bank_accounts', function(Blueprint $table)
		{
			//
			$table->increments('id');
			//FK customer
			$table->integer('farmer_cif');

			$table->string('bank_source',50);
			$table->integer('account_number');
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
		Schema::drop('bank_accounts');
	}

}
