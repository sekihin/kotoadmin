@extends('layout.master')
@section('content')
    <h1>Create Order</h1>
    {!! Form::open(['url' => 'orders']) !!}
    <div class="form-group">
        <a href="{{ url('orders')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div> 
    <div class="form-group">
        {!! Form::label('OrderID', 'OrderID:') !!}
        {!! Form::text('OrderID',null,['class'=>'form-control']) !!}
    </div>    
    <div class="form-group">
        {!! Form::label('CustomerID', 'CustomerID:') !!}
        {!! Form::text('CustomerID',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('EmployeeID', 'EmployeeID:') !!}
        {!! Form::text('EmployeeID',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('OrderDate', 'OrderDate:') !!}
        {!! Form::text('OrderDate',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('RequiredDate', 'RequiredDate:') !!}
        {!! Form::text('RequiredDate',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShippedDate', 'ShippedDate:') !!}
        {!! Form::text('ShippedDate',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShipVia', 'ShipVia:') !!}
        {!! Form::text('ShipVia',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Freight', 'Freight:') !!}
        {!! Form::text('Freight',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShipName', 'ShipName:') !!}
        {!! Form::text('ShipName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShipAddress', 'ShipAddress:') !!}
        {!! Form::text('ShipAddress',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShipCity', 'ShipCity:') !!}
        {!! Form::text('ShipCity',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShipRegion', 'ShipRegion:') !!}
        {!! Form::text('ShipRegion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShipPostalCode', 'ShipPostalCode:') !!}
        {!! Form::text('ShipPostalCode',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ShipCountry', 'ShipCountry:') !!}
        {!! Form::text('ShipCountry',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('orders')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop