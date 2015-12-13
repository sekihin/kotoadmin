<?php namespace App\Http\Controllers;

use App\EmloyeeTerritory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmloyeeTerritoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $emloyeeTerritories=Order::all();
        return view('emloyeeTerritories.index',compact('emloyeeTerritories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('emloyeeTerritories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $order=Request::all();
        Order::create($order);
        return redirect('emloyeeTerritories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('emloyeeTerritories.show', array('order' => $order));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $order=Order::find($id);
        return view('emloyeeTerritories.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $orderUpdate=Request::all();
        $order=Order::find($id);
        $order->update($orderUpdate);
        return redirect('emloyeeTerritories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect('emloyeeTerritories');
    }

}
