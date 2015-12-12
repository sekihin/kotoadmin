<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function(Blueprint $table)
		{
			$table->foreign('CategoryID', 'FK_Products_Categories')->references('CategoryID')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('SupplierID', 'FK_Products_Suppliers')->references('SupplierID')->on('suppliers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function(Blueprint $table)
		{
			$table->dropForeign('FK_Products_Categories');
			$table->dropForeign('FK_Products_Suppliers');
		});
	}

}
