<?php namespace App\Http\Controllers;

use App\Region;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $regions=Region::all();
        return view('regions.index',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $region=Request::all();
        Region::create($region);
        return redirect('regions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $region = Region::find($id);
        return view('regions.show', array('region' => $region));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $region=Region::find($id);
        return view('regions.edit',compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $regionUpdate=Request::all();
        $region=Region::find($id);
        $region->update($regionUpdate);
        return redirect('regions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Region::find($id)->delete();
        return redirect('regions');
    }

}
