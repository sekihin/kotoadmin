@extends('layout.master')
@section('content')
    <h1>Update Supplier</h1>
    {!! Form::model($order,['method' => 'PATCH','route'=>['orders.update',$order>OrderID]]) !!}
    <div class="form-group">
        <a href="{{ url('orders')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop