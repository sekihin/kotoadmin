<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTerritoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('territories', function(Blueprint $table)
		{
			$table->foreign('RegionID', 'FK_Territories_Region')->references('RegionID')->on('region')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('territories', function(Blueprint $table)
		{
			$table->dropForeign('FK_Territories_Region');
		});
	}

}
