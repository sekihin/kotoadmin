<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('territories', function(Blueprint $table)
		{
			$table->string('TerritoryID', 20)->primary();
			$table->string('TerritoryDescription', 50);
			$table->integer('RegionID')->index('FK_Territories_Region');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('territories');
	}

}
