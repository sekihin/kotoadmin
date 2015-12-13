<?php namespace App\Http\Controllers;

use App\Supplier;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TerritoryController extends Controller {

    /**Territory
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $territories=Territory::all();
        return view('territories.index',compact('territories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('territories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $customer=Request::all();
        Territory::create($customer);
        return redirect('territories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $customer = Territory::find($id);
        return view('territories.show', array('customer' => $customer));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $customer=Territory::find($id);
        return view('territories.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $customerUpdate=Request::all();
        $customer=Territory::find($id);
        $customer->update($customerUpdate);
        return redirect('territories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Territory::find($id)->delete();
        return redirect('territories');
    }

}
