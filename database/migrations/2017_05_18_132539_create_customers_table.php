<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			//
			$table->increments('id');

			$table->integer('cif');
			$table->string('name', 50);
			$table->string('alias', 25);
			$table->string('gender', 10);
			$table->integer('idcard');
			$table->string('idcard_valid_date',10);
			$table->string('poktan',50);
			$table->boolean('has_rddk');
			$table->string('spouse_name',50);
			$table->string('mother_name',50);
			$table->string('address',255);
			$table->integer('dependent_family');
			$table->integer('residence_span');
			$table->integer('experience_span');
			$table->integer('npwp');
			$table->integer('contacts');

			//Foreign Key Master Status Mitra
			$table->integer('status_id');
			//Foreign Key Master Education
			$table->integer('location_id');
			//Foreign Key Master Marital Status
			$table->integer('marital_id');
			//Foreign Key Master Location Segment
			$table->integer('education_id');
			//Foreign Key Master Property Status
			$table->integer('propertystatus_id');
			//Foreign Key Master Disbursement Method
			$table->integer('disbursementmethod_id');
			//Foreign Key Table Bank Account
			$table->integer('bankaccount_id');


			$table->boolean('is_synced');
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
		Schema::drop('customers');
	}

}
