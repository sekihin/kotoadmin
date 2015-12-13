@extends('layout.master')
@section('content')
    <h1>Product Show [{{ $product->ProductID }}]</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('products')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="form-group">
            <label for="ProductName" class="col-sm-2 control-label">ProductName: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ProductName" placeholder="{{ $product->ProductName }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="SupplierID" class="col-sm-2 control-label">SupplierID: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="SupplierID" placeholder="{{ $product->SupplierID }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="CategoryID" class="col-sm-2 control-label">CategoryID: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="CategoryID" placeholder="{{ $product->CategoryID }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="QuantityPerUnit" class="col-sm-2 control-label">QuantityPerUnit: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="QuantityPerUnit" placeholder="{{ $product->QuantityPerUnit }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="UnitPrice" class="col-sm-2 control-label">UnitPrice: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="UnitPrice" placeholder="{{ $product->UnitPrice }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="UnitsInStock" class="col-sm-2 control-label">UnitsInStock: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="UnitsInStock" placeholder="{{ $product->UnitsInStock }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="UnitsOnOrder" class="col-sm-2 control-label">UnitsOnOrder: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="UnitsOnOrder" placeholder="{{ $product->UnitsOnOrder }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="ReorderLevel" class="col-sm-2 control-label">ReorderLevel: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Discontinued" placeholder="{{ $product->ReorderLevel }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Discontinued" class="col-sm-2 control-label">Discontinued: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Discontinued" placeholder="{{ $product->Discontinued }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('products')}}" class="btn btn-primary">Back</a>
            </div>
        </div>        
    </form>
@stop