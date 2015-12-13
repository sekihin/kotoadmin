<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $primaryKey = 'CustomerID';

        protected $fillable=[
            'CustomerID',
            'CompanyName',
            'ContactName',
            'ContactTitle',
            'City',
            'Region',
            'Phone',
            'Fax'
        ];
}
