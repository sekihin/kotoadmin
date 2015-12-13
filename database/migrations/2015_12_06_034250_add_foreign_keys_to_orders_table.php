<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->foreign('CustomerID', 'FK_Orders_Customers')->references('CustomerID')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('EmployeeID', 'FK_Orders_Employees')->references('EmployeeID')->on('employees')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ShipVia', 'FK_Orders_Shippers')->references('ShipperID')->on('shippers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->dropForeign('FK_Orders_Customers');
			$table->dropForeign('FK_Orders_Employees');
			$table->dropForeign('FK_Orders_Shippers');
		});
	}

}
