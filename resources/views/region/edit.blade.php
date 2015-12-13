@extends('layout.master')
@section('content')
    <h1>Update Region</h1>
    {!! Form::model($region,['method' => 'PATCH','route'=>['regions.update',$region->RegionID]]) !!}
    <div class="form-group">
        <a href="{{ url('regions')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('RegionDescription', 'RegionDescription:') !!}
        {!! Form::text('RegionDescription',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('regions')}}" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class' => 'btn btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}
@stop