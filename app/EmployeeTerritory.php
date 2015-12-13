<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeTerritory extends Model {

	protected $primaryKey = 'EmployeeID, TerritoryID';

        protected $fillable=[
            'EmployeeID',
            'TerritoryID'
        ];

}
