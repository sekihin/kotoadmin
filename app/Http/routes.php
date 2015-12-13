<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('admin', 'AdminController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('categories', 'CategoryController');

Route::resource('customerCustomerDemo', 'CustomerCustomerDemoController');

Route::resource('customerDemographics', 'CustomerDemographicController');

Route::resource('customers', 'CustomerController');

Route::resource('employees', 'EmployeeController');

Route::resource('EmployeeTerritories', 'EmployeeTerritoryController');

Route::resource('orderDetails', 'OrderDetailController');

Route::resource('orders', 'OrderController');

Route::resource('products', 'ProductController');

Route::resource('region', 'RegionController');

Route::resource('shippers', 'ShipperController');

Route::resource('suppliers', 'SupplierController');

Route::resource('territories', 'SupplierController');


