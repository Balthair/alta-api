<?php

namespace App\Http\Controllers;

use App\PlanEntryStatus;
use Illuminate\Http\Request;
use App\Http\Requests\PlanEntryStatusRequest;

class PlanEntryStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pes = new PlanEntryStatus;
        return $pes->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanEntryStatusRequest $request)
    {
        $pes = new PlanEntryStatus;
        return $pes->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanEntryStatus  $planEntryStatus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pes = new PlanEntryStatus;
        return $pes->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanEntryStatus  $planEntryStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pes = new PlanEntryStatus;
        return $pes->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanEntryStatus  $planEntryStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pes = new PlanEntryStatus;
        return $pes->drop($id);
    }
}
