<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmloyeeTerritoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emloyeeterritories', function(Blueprint $table)
		{
			$table->string('CustomerTypeID', 10)->primary();
			$table->text('CustomerDesc', 16777215)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emloyee_territories');
	}

}
