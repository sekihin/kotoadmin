@extends('layout.master')

@section('content')
 <h1>Region List</h1>
 <a href="{{url('/regions/create')}}" class="btn btn-success">Create Region</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>RegionID</th>
         <th>RegionDescription</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($regions as $region)
         <tr>
             <td>{{ $region->RegionID }}</td>
             <td>{{ $region->RegionDescription }}</td>
             <td><a href="{{url('regions',$region->RegionID)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('regions.edit',$region->RegionID)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['regions.destroy', $region->RegionID]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
