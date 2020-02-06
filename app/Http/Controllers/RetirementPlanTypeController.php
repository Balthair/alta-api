<?php

namespace App\Http\Controllers;

use App\RetirementPlanType;
use Illuminate\Http\Request;
use App\Http\Requests\RetirementPlanTypeRequest;

class RetirementPlanTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rpt = new RetirementPlanType;
        return $rpt->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RetirementPlanTypeRequest $request)
    {
        $rpt = new RetirementPlanType;
        return $rpt->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RetirementPlanType  $retirementPlanType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rpt = new RetirementPlanType;
        return $rpt->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RetirementPlanType  $retirementPlanType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rpt = new RetirementPlanType;
        return $rpt->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RetirementPlanType  $retirementPlanType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rpt = new RetirementPlanType;
        return $rpt->drop($id);
    }
}
