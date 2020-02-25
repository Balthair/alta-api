<?php

namespace App\Http\Controllers;

use App\FinancialStatement;
use Illuminate\Http\Request;
use App\Http\Requests\FinancialStatementsRequest;

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
    public function store(FinancialStatementsRequest $request)
    {
        $fs = new FinancialStatement;
        return $fs->add($request->validated());
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
    public function update(Request $request, FinancialStatement $FinancialStatement)
    {
        $fs = new FinancialStatement;
        return $fs->updateRecord($request->all(), $FinancialStatement);
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
        return $fs->drop($id);
    }
}
