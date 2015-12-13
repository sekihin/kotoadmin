@extends('layout.master')

@section('content')
    <div id="content" class="clearfix">
        <div class="contentwrapper"><!--Content wrapper-->

            <div class="heading">

                <h3>Manage Customer</h3>

                <div class="resBtnSearch">
                    <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
                </div>
                <ul class="breadcrumb">
                    <li>You are here:</li>
                    <li>
                        <a href="#" class="tip" title="back to dashboard">
                            <span class="icon16 icomoon-icon-screen-2"></span>
                        </a>
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-3"></span>
                            </span>
                    </li>
                    <li class="active">Manage Customer</li>
                </ul>

            </div><!-- End .heading-->

            <!-- Build page from here: Usual with <div class="row-fluid"></div> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default gradient">
                        <div class="panel-heading">
                            <h4>
                                <span>Manage Customer</span>
                            </h4>
                        </div>
                        <div class="panel-body noPad clearfix">
                            <table cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%">
                                <thead>
                                <tr>
                                    <th>Cl</th>
                                    <th>Company Name</th>
                                    <th>Contact Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n = 0;?>
                                @foreach ($customers as $customer)
                                    <?php $n++;?>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['customers.destroy', $customer->CustomerID]]) !!}
                                    <tr class="{{ ($n==0) ? 'gradeX' : 'gradeC' }}">
                                        <td>{{ $customer->CustomerID }}</td>
                                        <td>{{ $customer->CompanyName }}</td>
                                        <td>{{ $customer->ContactName }}</td>
                                        <td>{{ $customer->Phone }}</td>
                                        <td>{{ $customer->Address }}</td>
                                        <td class="center">
                                            <a href="{{url('customers',$customer->CustomerID)}}" class="btn bg-olive btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                <span class="icon-style  icomoon-icon-search-3"></span>
                                            </a>
                                            <a href="{{route('customers.edit',$customer->CustomerID)}}" class="btn bg-navy btn-xs" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                <i class="icon-style icomoon-icon-pencil-3"></i>
                                            </a>

                                            <a href="#" class="btn btn-danger btn-xs" title="" data-toggle="tooltip" data-placement="top" onclick="$(this).closest('form')[0].submit();" data-original-title="Delete">
                                                <i class="icon-style  icomoon-icon-remove-3"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    {!! Form::close() !!}
                                @endforeach

                                </tbody>

                            </table>
@endsection
