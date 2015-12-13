<?php namespace App\Http\Controllers;

use App\OrderDetail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrderDetailDetailController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orderDetails=OrderDetail::all();
        return view('orderDetails.index',compact('orderDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('orderDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $orderDetail=Request::all();
        OrderDetail::create($orderDetail);
        return redirect('orderDetails');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $orderDetail = OrderDetail::find($id);
        return view('orderDetails.show', array('orderdetail' => $orderDetail));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $orderDetail=OrderDetail::find($id);
        return view('orderDetails.edit',compact('orderdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $orderDetailUpdate=Request::all();
        $orderDetail=OrderDetail::find($id);
        $orderDetail->update($orderDetailUpdate);
        return redirect('orderDetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        OrderDetail::find($id)->delete();
        return redirect('orderDetails');
    }

}
