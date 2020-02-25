<?php

namespace App\Http\Controllers;

use App\BenefitProgram;
use Illuminate\Http\Request;
use App\Http\Requests\BenefitProgramRequest;

class BenefitProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bp = new BenefitProgram;
        return $bp->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BenefitProgramRequest $request)
    {
        $bp = new BenefitProgram;
        $bp->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BenefitProgram  $benefitProgram
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bp = new BenefitProgram;
        return $bp->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BenefitProgram  $benefitProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BenefitProgram $BenefitProgram)
    {
        $bp = new BenefitProgram;
        $bp->updateRecord($request->all(), $BenefitProgram);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BenefitProgram  $benefitProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bp = new BenefitProgram;
        $bp->drop($id);
    }
}
