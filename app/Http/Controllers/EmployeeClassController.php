<?php

namespace App\Http\Controllers;

use App\EmployeeClass;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeClassRequest;

class EmployeeClassController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ec = new EmployeeClass;
        return $ec->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeClassRequest $request)
    {
        $ec = new EmployeeClass;
        return $ec->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeClass  $employeeClass
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ec = new EmployeeClass;
        return $ec->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeClass  $employeeClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ec = new EmployeeClass;
        return $ec->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeClass  $employeeClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ec = new EmployeeClass;
        return $ec->drop($id);
    }
}
