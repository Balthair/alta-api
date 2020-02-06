<?php

namespace App\Http\Controllers;

use App\InvestmentFundsAvailable;
use Illuminate\Http\Request;
use App\Http\Requests\InvestmentFundsAvailableRequest;

class InvestmentFundsAvailableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ifa = new InvestmentFundsAvailable;
        return $ifa->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvestmentFundsAvailableRequest $request)
    {
        $ifa = new InvestmentFundsAvailable;
        return $ifa->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InvestmentFundsAvailable  $investmentFundsAvailable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ifa = new InvestmentFundsAvailable;
        return $ifa->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InvestmentFundsAvailable  $investmentFundsAvailable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ifa = new InvestmentFundsAvailable;
        return $ifa->updateRecord($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InvestmentFundsAvailable  $investmentFundsAvailable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ifa = new InvestmentFundsAvailable;
        return $ifa->drop($id);
    }
}
