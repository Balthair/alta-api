<?php

namespace App\Http\Controllers;

use App\ParticipantCriteria;
use App\Http\Requests\ParticipantCriteriaRequest;

class ParticipantCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pCriteria = new ParticipantCriteria;
        return $pCriteria->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParticipantCriteriaRequest $request)
    {
        $pCriteria = new ParticipantCriteria;
        return $pCriteria->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParticipantCriteria  $participantCriteria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pCriteria = new ParticipantCriteria;
        return $pCriteria->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParticipantCriteria  $participantCriteria
     * @return \Illuminate\Http\Response
     */
    public function update(ParticipantCriteriaRequest $request)
    {
        $pCriteria = new ParticipantCriteria;
        return $pCriteria->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParticipantCriteria  $participantCriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pCriteria = new ParticipantCriteria;
        return $pCriteria->drop($id);
    }
}
