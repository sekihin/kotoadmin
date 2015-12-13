@extends('layout.master')
@section('content')
    <h1>Update Employee</h1>
    {!! Form::model($employee,['method' => 'PATCH','route'=>['employees.update',$employee->EmployeeID]]) !!}
    <div class="form-group">
        <a href="{{ url('employees')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('LastName', 'LastName:') !!}
        {!! Form::text('LastName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('FirstName', 'FirstName:') !!}
        {!! Form::text('FirstName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('Title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('TitleOfCourtesy', 'TitleOfCourtesy:') !!}
        {!! Form::text('TitleOfCourtesy',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('BirthDate', 'BirthDate:') !!}
        {!! Form::text('BirthDate',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('HireDate', 'HireDate:') !!}
        {!! Form::text('HireDate',null,['class'=>'form-control']) !!}
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
        {!! Form::label('HomePhone', 'HomePhone:') !!}
        {!! Form::text('HomePhone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Extension', 'Extension:') !!}
        {!! Form::text('Extension',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Photo', 'Photo:') !!}
        {!! Form::text('Photo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Notes', 'Notes:') !!}
        {!! Form::text('Notes',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ReportsTo', 'ReportsTo:') !!}
        {!! Form::text('ReportsTo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('PhotoPath', 'PhotoPath:') !!}
        {!! Form::text('PhotoPath',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('employees')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('employees')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop