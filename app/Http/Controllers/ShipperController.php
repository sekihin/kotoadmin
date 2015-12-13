<?php namespace App\Http\Controllers;

use App\Shipper;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShipperController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shippers=Shipper::all();
        return view('shippers.index',compact('shippers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shippers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $shipper=Request::all();
        Shipper::create($shipper);
        return redirect('shippers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $shipper = Shipper::find($id);
        return view('shippers.show', array('shipper' => $shipper));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $shipper=Shipper::find($id);
        return view('shippers.edit',compact('shipper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $shipperUpdate=Request::all();
        $shipper=Shipper::find($id);
        $shipper->update($shipperUpdate);
        return redirect('shippers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Shipper::find($id)->delete();
        return redirect('shippers');
    }

}
