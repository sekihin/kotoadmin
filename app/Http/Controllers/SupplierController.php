<?php namespace App\Http\Controllers;

use App\Supplier;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SupplierController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $suppliers=Supplier::all();
        return view('suppliers.index',compact('suppliers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('suppliers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $supplier=Request::all();
        Supplier::create($supplier);
        return redirect('suppliers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $supplier = Supplier::find($id);
        return view('suppliers.show', array('supplier' => $supplier));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $supplier=Supplier::find($id);
        return view('suppliers.edit',compact('supplier'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $supplierUpdate=Request::all();
        $supplier=Supplier::find($id);
        $supplier->update($supplierUpdate);
        return redirect('suppliers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Supplier::find($id)->delete();
        return redirect('suppliers');
	}

}
