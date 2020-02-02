<?php

namespace App\Http\Controllers;

use App\FinancialStatement;
use App\Http\Requests\FinancialStatementRequest;

class FinancialStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fs = new FinancialStatement;
        return $fs->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FinancialStatementRequest $request)
    {
        $fs = new FinancialStatement;
        $fs->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FinancialStatement  $financialStatement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fs = new FinancialStatement;
        return $fs->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FinancialStatement  $financialStatement
     * @return \Illuminate\Http\Response
     */
    public function update(FinancialStatementRequest $request, FinancialStatement $financialStatement)
    {
        $fs = new FinancialStatement;
        $fs->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FinancialStatement  $financialStatement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fs = new FinancialStatement;
        $fs->drop(($id));
    }
}
