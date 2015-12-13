<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('ProductID', true)->primary();
			$table->string('ProductName', 40)->index('ProductName');
			$table->integer('SupplierID')->nullable()->index('FK_Products_Suppliers');
			$table->integer('CategoryID')->nullable()->index('FK_Products_Categories');
			$table->string('QuantityPerUnit', 20)->nullable();
			$table->decimal('UnitPrice', 10, 4)->nullable()->default(0.0000);
			$table->smallInteger('UnitsInStock')->nullable()->default(0);
			$table->smallInteger('UnitsOnOrder')->nullable()->default(0);
			$table->smallInteger('ReorderLevel')->nullable()->default(0);
			$table->boolean('Discontinued', 1)->default(false);
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
