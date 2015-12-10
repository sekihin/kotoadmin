@extends('layout/template')

@section('content')
 <h1>Customer List</h1>
 <a href="{{url('/customers/create')}}" class="btn btn-success">Create Customer</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>CustomerID</th>
         <th>CompanyName</th>
         <th>ContactName</th>
         <th>ContactTitle</th>
         <th>Address</th>
         <th>City</th>
         <th>Region</th>
         <th>PostalCode</th>
         <th>Country</th>
         <th>Phone</th>
         <th>Fax</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($customers as $customer)
         <tr>
             <td>{{ $customer->CustomerID }}</td>
             <td>{{ $customer->CompanyName }}</td>
             <td>{{ $customer->ContactName }}</td>
             <td>{{ $customer->ContactTitle }}</td>
             <td>{{ $customer->Address }}</td>
             <td>{{ $customer->City }}</td>
             <td>{{ $customer->Region }}</td>
             <td>{{ $customer->PostalCode }}</td>
             <td>{{ $customer->Country }}</td>
             <td>{{ $customer->Phone }}</td>
             <td>{{ $customer->Fax }}</td>
             <td><a href="{{url('customers',$customer->CustomerID)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('customers.edit',$customer->CustomerID)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['customers.destroy', $customer->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
