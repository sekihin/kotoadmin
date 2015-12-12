@extends('layout.master')
@section('content')
    <h1>Update Supplier</h1>
    {!! Form::model($supplier,['method' => 'PATCH','route'=>['suppliers.update',$supplier>SupplierID]]) !!}
    <div class="form-group">
        <a href="{{ url('suppliers')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('CompanyName', 'CompanyName:') !!}
        {!! Form::text('CompanyName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ContactName', 'ContactName:') !!}
        {!! Form::text('ContactName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ContactTitle', 'ContactTitle:') !!}
        {!! Form::text('ContactTitle',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Address', 'Address:') !!}
        {!! Form::text('Address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('City', 'City:') !!}
        {!! Form::text('City',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Region', 'Region:') !!}
        {!! Form::text('Region',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('PostalCode', 'PostalCode:') !!}
        {!! Form::text('PostalCode',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Country', 'Country:') !!}
        {!! Form::text('Country',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('Phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Fax', 'Fax:') !!}
        {!! Form::text('Fax',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('HomePage', 'HomePage:') !!}
        {!! Form::text('HomePage',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('suppliers')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop