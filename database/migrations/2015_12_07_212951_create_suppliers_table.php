<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliers', function(Blueprint $table)
		{
			$table->integer('SupplierID', true)->primary();
			$table->string('CompanyName', 40)->index('CompanyName');
			$table->string('ContactName', 30)->nullable();
			$table->string('ContactTitle', 30)->nullable();
			$table->string('Address', 60)->nullable();
			$table->string('City', 15)->nullable();
			$table->string('Region', 15)->nullable();
			$table->string('PostalCode', 10)->nullable()->index('PostalCode');
			$table->string('Country', 15)->nullable();
			$table->string('Phone', 24)->nullable();
			$table->string('Fax', 24)->nullable();
			$table->text('HomePage', 16777215)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suppliers');
	}

}
