<?php

namespace App\Http\Controllers;

use App\HealthDeliveryVehicle;
use Illuminate\Http\Request;
use App\Http\Requests\HealthDeliveryVehicleRequest;

class HealthDeliveryVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hdv = new HealthDeliveryVehicle;
        return $hdv->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HealthDeliveryVehicleRequest $request)
    {
        $hdv = new HealthDeliveryVehicle;
        return $hdv->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HealthDeliveryVehicle  $healthDeliveryVehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hdv = new HealthDeliveryVehicle;
        return $hdv->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthDeliveryVehicle  $healthDeliveryVehicle
     * @return \Illuminate\Http\Response
     */
    public function update($id, HealthDeliveryVehicle $healthDeliveryVehicle)
    {
        $hdv = new HealthDeliveryVehicle;
        return $hdv->updateRecord($id, $healthDeliveryVehicle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthDeliveryVehicle  $healthDeliveryVehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hdv = new HealthDeliveryVehicle;
        return $hdv->drop($id);
    }
}
