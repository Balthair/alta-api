<?php

namespace App\Http\Controllers;

use App\ParticipantType;
use Illuminate\Http\Request;
use App\Http\Requests\ParticipantTypeRequest;

class ParticipantTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pType = new ParticipantType;
        return $pType->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParticipantTypeRequest $request)
    {
        $pType = new ParticipantType;
        return $pType->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParticipantType  $participantType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pType = new ParticipantType;
        return $pType->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParticipantType  $participantType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pType = new ParticipantType;
        return $pType->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParticipantType  $participantType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pType = new ParticipantType;
        return $pType->drop($id);
    }
}
