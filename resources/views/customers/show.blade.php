@extends('layout.master')
@section('content')
    <h1>Customer Show [{{ $customer->CustomerID }}]</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('customers')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="form-group">
            <label for="CompanyName" class="col-sm-2 control-label">CompanyName: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="CompanyName" placeholder="{{ $customer->CompanyName }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="ContactName" class="col-sm-2 control-label">ContactName: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ContactName" placeholder="{{ $customer->ContactName }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="ContactTitle" class="col-sm-2 control-label">ContactTitle: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ContactTitle" placeholder="{{ $customer->ContactTitle }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Address" class="col-sm-2 control-label">Address: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Address" placeholder="{{ $customer->Address }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="City" class="col-sm-2 control-label">City: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="City" placeholder="{{ $customer->City }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Region" class="col-sm-2 control-label">Region: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Region" placeholder="{{ $customer->Region }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="PostalCode" class="col-sm-2 control-label">PostalCode: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Country" placeholder="{{ $customer->PostalCode }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Country" class="col-sm-2 control-label">Country: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Country" placeholder="{{ $customer->Country }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Phone" class="col-sm-2 control-label">Phone: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Phone" placeholder="{{ $customer->Phone }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Fax" class="col-sm-2 control-label">Fax: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Phone" placeholder="{{ $customer->Fax }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('customers')}}" class="btn btn-primary">Back</a>
            </div>
        </div>        
    </form>
@stop