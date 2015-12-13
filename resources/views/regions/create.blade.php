@extends('layout.master')
@section('content')
    <h1>Create Region</h1>
    {!! Form::open(['url' => 'region']) !!}
    <div class="form-group">
        <a href="{{ url('regions')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div> 
    <div class="form-group">
        {!! Form::label('RegionID', 'RegionID:') !!}
        {!! Form::text('RegionID',null,['class'=>'form-control']) !!}
    </div>    
    <div class="form-group">
        {!! Form::label('RegionDescription', 'RegionDescription:') !!}
        {!! Form::text('RegionDescription',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('regions')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Save', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop