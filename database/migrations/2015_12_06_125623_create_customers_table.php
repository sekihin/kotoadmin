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
			$table->string('CustomerID', 5)->primary();
			$table->string('CompanyName', 40)->index('CompanyName');
			$table->string('ContactName', 30)->nullable();
			$table->string('ContactTitle', 30)->nullable();
			$table->string('Address', 60)->nullable();
			$table->string('City', 15)->nullable()->index('City');
			$table->string('Region', 15)->nullable()->index('Region');
			$table->string('PostalCode', 10)->nullable()->index('PostalCode');
			$table->string('Country', 15)->nullable();
			$table->string('Phone', 24)->nullable();
			$table->string('Fax', 24)->nullable();
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
