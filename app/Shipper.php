<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model {

        protected $primaryKey = 'ShipperID';

        protected $fillable=[
            'ShipperID',
            'CompanyName',
            'Phone'
        ];

}
