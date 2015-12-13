<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDemographic extends Model {

	protected $primaryKey = 'CustomerTypeID';

        protected $fillable=[
            'CustomerTypeID',
            'CustomerDesc'
        ];

}
