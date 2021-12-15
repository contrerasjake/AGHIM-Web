<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use App\Http\Requests\OrderDetailsRequest;
use App\Http\Resources\OrderDetailsResource;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderDetailsResource::collection(OrderDetails::all());
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
     * @param  \App\Http\Requests\StoreOrderDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderDetailsRequest $request)
    {
        $orderDetails = OrderDetails::create([
            'user_id' => $request->input('user_id'),
            'restaurants_id' => $request->input('restaurants_id'),
            'amount' => $request->input('amount')
        ]);

        return new OrderDetailsResource($orderDetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetails $orderDetails)
    {
        return new OrderDetailsResource($orderDetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetails $orderDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderDetailsRequest  $request
     * @param  \App\Models\OrderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function update(OrderDetailsRequest $request, OrderDetails $orderDetails)
    {
        $orderDetails->update([
            'user_id' => $request->input('user_id'),
            'restaurants_id' => $request->input('restaurants_id'),
            'amount' => $request->input('amount')
        ]);

        return new OrderDetailsResource($orderDetails);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetails $orderDetails)
    {
        $orderDetails->delete();
        return response(null, 204);
    }
}
