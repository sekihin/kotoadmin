<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_details', function(Blueprint $table)
		{
			$table->foreign('OrderID', 'FK_Order_Details_Orders')->references('OrderID')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ProductID', 'FK_Order_Details_Products')->references('ProductID')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_details', function(Blueprint $table)
		{
			$table->dropForeign('FK_Order_Details_Orders');
			$table->dropForeign('FK_Order_Details_Products');
		});
	}

}
