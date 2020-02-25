<?php

namespace App\Http\Controllers;

use App\BenefitForm;
use Illuminate\Http\Request;
use App\Http\Requests\BenefitFormRequest;

class BenefitFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bf = new BenefitForm;
        return $bf->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BenefitFormRequest $request)
    {
        $bf = new BenefitForm;
        return $bf->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BenefitForm  $benefitForm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bf = new BenefitForm;
        return $bf->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BenefitForm  $benefitForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BenefitForm $BenefitForm)
    {
        $bf = new BenefitForm;
        return $bf->updateRecord($request->all(), $BenefitForm);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BenefitForm  $benefitForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bf = new BenefitForm;
        return $bf->drop($id);
    }
}
