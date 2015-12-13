@extends('layout.master')
@section('content')
    <h1>Region Show [{{ $region->RegionID }}]</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('regions')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="form-group">
            <label for="RegionDescription" class="col-sm-2 control-label">RegionDescription: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="RegionDescription" placeholder="{{ $region->RegionDescription }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('regions')}}" class="btn btn-primary">Back</a>
            </div>
        </div>        
    </form>
@stop