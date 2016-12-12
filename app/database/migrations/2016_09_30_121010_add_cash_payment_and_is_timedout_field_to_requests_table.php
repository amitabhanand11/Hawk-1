<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCashPaymentAndIsTimedoutFieldToRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('request', function(Blueprint $table)
		{
			$table->float('cash_payment');
			$table->integer('is_timedout');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('request', function(Blueprint $table)
		{
			$table->drop('cash_payment');
			$table->drop('is_timedout');
		});
	}

}
