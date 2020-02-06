<?php

namespace App\Http\Controllers;

use App\HealthPlanCoverageList;
use Illuminate\Http\Request;
use App\Http\Requests\HealthPlanCoverageListRequest;

class HealthPlanCoverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hpc = new HealthPlanCoverageList;
        return $hpc->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HealthPlanCoverageListRequest $request)
    {
        $hpc = new HealthPlanCoverageList;
        return $hpc->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HealthPlanCoverageList  $healthPlanCoverage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hpc = new HealthPlanCoverageList;
        return $hpc->getById($id);
    }


/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthPlanCoverageList  $healthPlanCoverage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hpc = new HealthPlanCoverageList;
        return $hpc->updateRecord($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthPlanCoverageList  $healthPlanCoverage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hpc = new HealthPlanCoverageList;
        return $hpc->drop($id);
    }
}
