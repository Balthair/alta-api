<?php

namespace App\Http\Controllers;

use App\PrimaryHealthCoverageList;
use Illuminate\Http\Request;
use App\Http\Requests\PrimaryHealthCoverageListRequest;

class PrimaryHealthCoverageListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phc = new PrimaryHealthCoverageList;
        return $phc->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrimaryHealthCoverageListRequest $request)
    {
        $phc = new PrimaryHealthCoverageList;
        return $phc->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrimaryHealthCoverageList  $primaryHealthCoverageList
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phc = new PrimaryHealthCoverageList;
        return $phc->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrimaryHealthCoverageList  $primaryHealthCoverageList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $phc = new PrimaryHealthCoverageList;
        return $phc->updateRecord($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrimaryHealthCoverageList  $primaryHealthCoverageList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phc = new PrimaryHealthCoverageList;
        return $phc->drop($id);
    }
}
