@extends('layout/template')

@section('content')
 <h1>Product List</h1>
 <a href="{{url('/products/create')}}" class="btn btn-success">Create Product</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>ProductID</th>
         <th>ProductName</th>
         <th>SupplierID</th>
         <th>CategoryID</th>
         <th>QuantityPerUnit</th>
         <th>UnitPrice</th>
         <th>UnitsInStock</th>
         <th>UnitsOnOrder</th>
         <th>ReorderLevel</th>
         <th>Discontinued</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($products as $product)
         <tr>
             <td>{{ $product->ProductID }}</td>
             <td>{{ $product->ProductName }}</td>
             <td>{{ $product->SupplierID }}</td>
             <td>{{ $product->CategoryID }}</td>
             <td>{{ $product->QuantityPerUnit }}</td>
             <td>{{ $product->UnitPrice }}</td>
             <td>{{ $product->UnitsInStock }}</td>
             <td>{{ $product->UnitsOnOrder }}</td>
             <td>{{ $product->ReorderLevel }}</td>
             <td>{{ $product->Discontinued }}</td>
             <td><a href="{{url('products',$product->ProductID)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('products.edit',$product->ProductID)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['products.destroy', $product->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
