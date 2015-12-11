<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model {

	protected $primaryKey = 'OrderID, ProductID';

        protected $fillable=[
            'OrderID',
            'ProductID',
            'UnitPrice',
            'Quantity',
            'Discount'
        ];

}
