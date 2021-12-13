<?php

namespace App\Http\Controllers;

use App\Models\PaymentDetails;
use App\Http\Requests\PaymentDetailsRequest;
use App\Http\Resources\PaymentDetailsResource;

class PaymentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PaymentDetailsResource::collection(PaymentDetails::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentDetailsRequest $request)
    {
        $paymentDetails = PaymentDetails::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);

        return new PaymentDetailsResource($paymentDetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentDetails  $paymentDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentDetails $paymentDetails)
    {
        return new PaymentDetailsResource($paymentDetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentDetails  $paymentDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentDetails $paymentDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentDetailsRequest  $request
     * @param  \App\Models\PaymentDetails  $paymentDetails
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentDetailsRequest $request, PaymentDetails $paymentDetails)
    {
        $paymentDetails->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);

        return new PaymentDetailsResource($paymentDetails);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentDetails  $paymentDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentDetails $paymentDetails)
    {
        $paymentDetails->delete();
        return response(null, 204);
    }
}
