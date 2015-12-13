@extends('layout.master')
@section('content')
    <h1>Supplier Show [{{ $supplier->SupplierID }}]</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('suppliers')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="form-group">
            <label for="CompanyName" class="col-sm-2 control-label">CompanyName: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="CompanyName" placeholder="{{ $supplier->CompanyName }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="ContactName" class="col-sm-2 control-label">ContactName: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ContactName" placeholder="{{ $supplier->ContactName }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="ContactTitle" class="col-sm-2 control-label">ContactTitle: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ContactTitle" placeholder="{{ $supplier->ContactTitle }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Address" class="col-sm-2 control-label">Address: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Address" placeholder="{{ $supplier->Address }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="City" class="col-sm-2 control-label">City: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="City" placeholder="{{ $supplier->City }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Region" class="col-sm-2 control-label">Region: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Region" placeholder="{{ $supplier->Region }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="PostalCode" class="col-sm-2 control-label">PostalCode: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Country" placeholder="{{ $supplier->PostalCode }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Country" class="col-sm-2 control-label">Country: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Country" placeholder="{{ $supplier->Country }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Phone" class="col-sm-2 control-label">Phone: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Phone" placeholder="{{ $supplier->Phone }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Fax" class="col-sm-2 control-label">Fax: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Fax" placeholder="{{ $supplier->Fax }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="HomePage" class="col-sm-2 control-label">HomePage: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="HomePage" placeholder="{{ $supplier->HomePage }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('suppliers')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop