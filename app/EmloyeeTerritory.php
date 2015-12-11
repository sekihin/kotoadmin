<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EmloyeeTerritory extends Model {

	protected $primaryKey = 'EmployeeID, TerritoryID';

        protected $fillable=[
            'EmployeeID',
            'TerritoryID'
        ];

}
