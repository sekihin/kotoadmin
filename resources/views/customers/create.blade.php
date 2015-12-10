@extends('layout.template')
@section('content')
    <h1>Create Book</h1>
    {!! Form::open(['url' => 'customers']) !!}
    <div class="form-group">
        <a href="{{ url('customers')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div> 
    <div class="form-group">
        {!! Form::label('CustomerID', 'CustomerID:') !!}
        {!! Form::text('CustomerID',null,['class'=>'form-control']) !!}
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
        {!! Form::label('Fax', 'Country:') !!}
        {!! Form::text('Fax',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('customers')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop