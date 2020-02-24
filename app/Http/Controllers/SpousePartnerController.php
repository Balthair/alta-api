<?php

namespace App\Http\Controllers;

use App\SpousePartner;
use Illuminate\Http\Request;
use App\Http\Requests\SpousePartnerRequest;

class SpousePartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sp = new SpousePartner;
        return $sp->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpousePartnerRequest $request)
    {
        $sp = new SpousePartner;
        return $sp->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpousePartner  $spousePartner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sp = new SpousePartner;
        return $sp->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpousePartner  $spousePartner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sp = new SpousePartner;
        return $sp->updateRecord($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpousePartner  $spousePartner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = new SpousePartner;
        $sp->drop($id);
    }
}
