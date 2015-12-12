<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomercustomerdemoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customercustomerdemo', function(Blueprint $table)
		{
			$table->foreign('CustomerTypeID', 'FK_CustomerCustomerDemo')->references('CustomerTypeID')->on('customerdemographics')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CustomerID', 'FK_CustomerCustomerDemo_Customers')->references('CustomerID')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customercustomerdemo', function(Blueprint $table)
		{
			$table->dropForeign('FK_CustomerCustomerDemo');
			$table->dropForeign('FK_CustomerCustomerDemo_Customers');
		});
	}

}
