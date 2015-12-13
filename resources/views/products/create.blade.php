@extends('layout.master')
@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['url' => 'products']) !!}
    <div class="form-group">
        <a href="{{ url('products')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div> 
    <div class="form-group">
        {!! Form::label('ProductID', 'ProductID:') !!}
        {!! Form::text('ProductID',null,['class'=>'form-control']) !!}
    </div>    
    <div class="form-group">
        {!! Form::label('ProductName', 'ProductName:') !!}
        {!! Form::text('ProductName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('SupplierID', 'SupplierID:') !!}
        {!! Form::text('SupplierID',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('CategoryID', 'CategoryID:') !!}
        {!! Form::text('CategoryID',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('QuantityPerUnit', 'QuantityPerUnit:') !!}
        {!! Form::text('QuantityPerUnit',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('UnitPrice', 'UnitPrice:') !!}
        {!! Form::text('UnitPrice',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('UnitsInStock', 'UnitsInStock:') !!}
        {!! Form::text('UnitsInStock',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('UnitsOnOrder', 'UnitsOnOrder:') !!}
        {!! Form::text('UnitsOnOrder',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ReorderLevel', 'ReorderLevel:') !!}
        {!! Form::text('ReorderLevel',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Discontinued', 'Discontinued:') !!}
        {!! Form::text('Discontinued',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('products')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop