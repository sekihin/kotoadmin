<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerCustomerDemo extends Model {

    	protected $table = 'CustomerCustomerDemo';

	protected $primaryKey = 'CustomerID, CustomerTypeID';

        protected $fillable=[
            'CustomerID',
            'CustomerTypeID'
        ];

}
