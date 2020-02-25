<?php

namespace App\Http\Controllers;

use App\FinancingVehicle;
use Illuminate\Http\Request;
use App\Http\Requests\FinancingVehicleRequest;

class FinancingVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fv = new FinancingVehicle;
        return $fv->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FinancingVehicleRequest $request)
    {
        $fv = new FinancingVehicle;
        return $fv->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FinancingVehicle  $financingVehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fv = new FinancingVehicle;
        return $fv->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FinancingVehicle  $financingVehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancingVehicle $FinancingVehicle)
    {
        $fv = new FinancingVehicle;
        return $fv->updateRecord($request->all(), $FinancingVehicle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FinancingVehicle  $financingVehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fv = new FinancingVehicle;
        return $fv->drop($id);
    }
}
