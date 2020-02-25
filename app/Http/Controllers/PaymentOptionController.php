<?php

namespace App\Http\Controllers;

use App\PaymentOption;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentOptionRequest;

class PaymentOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $po = new PaymentOption;
        return $po->getAll();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentOptionRequest $request)
    {
        $po = new PaymentOption;
        return $po->add($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentOption  $paymentOption
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $po = new PaymentOption;
        return $po->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentOption  $paymentOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentOption $PaymentOption)
    {
        $po = new PaymentOption;
        return $po->updateRecord($request->all(), $PaymentOption);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentOption  $paymentOption
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $po = new PaymentOption;
        return $po->drop($id);
    }
}
