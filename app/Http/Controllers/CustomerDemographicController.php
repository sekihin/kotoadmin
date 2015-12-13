<?php namespace App\Http\Controllers;

use App\CustomerDemographic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CustomerDemographicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $customerDemographicControllers=CustomerDemographicController::all();
        return view('customerDemographicControllers.index',compact('customerDemographicControllers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('customerDemographicControllers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $customerDemographicController=Request::all();
        CustomerDemographicController::create($customerDemographicController);
        return redirect('customerDemographicControllers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $customerDemographicController = CustomerDemographicController::find($id);
        return view('customerDemographicControllers.show', array('customerDemographicController' => $customerDemographicController));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $customerDemographicController=CustomerDemographicController::find($id);
        return view('customerDemographicControllers.edit',compact('customerDemographicController'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $customerDemographicControllerUpdate=Request::all();
        $customerDemographicController=CustomerDemographicController::find($id);
        $customerDemographicController->update($customerDemographicControllerUpdate);
        return redirect('customerDemographicControllers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        CustomerDemographicController::find($id)->delete();
        return redirect('customerDemographicControllers');
    }

}
