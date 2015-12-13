<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Territory extends Model {

        protected $primaryKey = 'SupplierID';

        protected $fillable=[
            'SupplierID',
            'CompanyName',
            'ContactName',
            'ContactTitle',
            'Address',
            'City',
            'Region',
            'PostalCode',
            'Country',
            'Phone',
            'Fax',
            'HomePage'
        ];

}
