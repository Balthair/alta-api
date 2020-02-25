<?php

namespace App\Http\Controllers;

use App\SameSex;
use Illuminate\Http\Request;
use App\Http\Requests\SameSexRequest;

class SameSexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ss = new SameSex;
        return $ss->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SameSexRequest $request)
    {
        $ss = new SameSex;
        return $ss->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SameSex  $sameSex
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ss = new SameSex;
        return $ss->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SameSex  $sameSex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SameSex $SameSex)
    {
        $ss = new SameSex;
        return $ss->updateRecord($request->all(), $SameSex);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SameSex  $sameSex
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ss = new SameSex;
        return $ss->drop($id);
    }
}
