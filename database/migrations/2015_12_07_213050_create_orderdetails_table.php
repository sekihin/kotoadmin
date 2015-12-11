<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderdetails', function(Blueprint $table)
		{
			$table->integer('OrderID');
			$table->integer('ProductID')->index('FK_Order_Details_Products');
			$table->decimal('UnitPrice', 10, 4)->default(0.0000);
			$table->smallInteger('Quantity')->default(1);
			$table->float('Discount', 8, 0)->default(0);
			$table->primary(['OrderID','ProductID']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orderdetails');
	}

}
