<?php

namespace App\Http\Controllers;

use App\TypeOfVendor;
use Illuminate\Http\Request;
use App\Http\Requests\TypeOfVendorRequest;

class TypeOfVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tv = new TypeOfVendor;
        return $tv->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeOfVendorRequest $request)
    {
        $tv = new TypeOfVendor;
        return $tv->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeOfVendor  $typeOfVendor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tv = new TypeOfVendor;
        return $tv->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeOfVendor  $typeOfVendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tv = new TypeOfVendor;
        return $tv->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeOfVendor  $typeOfVendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tv = new TypeOfVendor;
        return $tv->drop($id);
    }
}
