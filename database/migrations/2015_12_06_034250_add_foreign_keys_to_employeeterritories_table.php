<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmployeeterritoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('employeeterritories', function(Blueprint $table)
		{
			$table->foreign('EmployeeID', 'FK_EmployeeTerritories_Employees')->references('EmployeeID')->on('employees')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('TerritoryID', 'FK_EmployeeTerritories_Territories')->references('TerritoryID')->on('territories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('employeeterritories', function(Blueprint $table)
		{
			$table->dropForeign('FK_EmployeeTerritories_Employees');
			$table->dropForeign('FK_EmployeeTerritories_Territories');
		});
	}

}
