<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('OrderID')->primary();
			$table->string('CustomerID', 5)->nullable()->index('FK_Orders_Customers');
			$table->integer('EmployeeID')->nullable()->index('FK_Orders_Employees');
			$table->dateTime('OrderDate')->nullable()->index('OrderDate');
			$table->dateTime('RequiredDate')->nullable();
			$table->dateTime('ShippedDate')->nullable()->index('ShippedDate');
			$table->integer('ShipVia')->nullable()->index('FK_Orders_Shippers');
			$table->decimal('Freight', 10, 4)->nullable()->default(0.0000);
			$table->string('ShipName', 40)->nullable();
			$table->string('ShipAddress', 60)->nullable();
			$table->string('ShipCity', 15)->nullable();
			$table->string('ShipRegion', 15)->nullable();
			$table->string('ShipPostalCode', 10)->nullable()->index('ShipPostalCode');
			$table->string('ShipCountry', 15)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
