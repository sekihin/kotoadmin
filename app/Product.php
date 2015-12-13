<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $primaryKey = 'ProductID';

        protected $fillable=[
            'ProductID',
            'ProductName',
            'SupplierID',
            'CategoryID',
            'QuantityPerUnit',
            'UnitPrice',
            'UnitsInStock',
            'UnitsOnOrder', 
            'ReorderLevel',              
            'Discontinued'
        ];
}
