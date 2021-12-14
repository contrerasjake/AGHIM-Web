<?php

namespace App\Http\Controllers;

use App\Models\TrackingDetails;
use App\Http\Requests\TrackingDetailsRequest;
use App\Http\Resources\TrackingDetailsResource;

class TrackingDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TrackingDetailsResource::collection(TrackingDetails::all());
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
     * @param  \App\Http\Requests\TrackingDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackingDetailsRequest $request)
    {
        $trackingDetails = TrackingDetails::create([
            'package_details_id' => $request->input('package_details_id'),
            'tracking_no' => $request->input('tracking_no'),
            'delivery_status' => $request->input('delivery_status'),     
        ]);

        return new TrackingDetailsResource($trackingDetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrackingDetails  $trackingDetails
     * @return \Illuminate\Http\Response
     */
    public function show(TrackingDetails $trackingDetails)
    {
        return new TrackingDetailsResource($trackingDetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackingDetails  $trackingDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackingDetails $trackingDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TrackingDetailsRequest  $request
     * @param  \App\Models\TrackingDetails  $trackingDetails
     * @return \Illuminate\Http\Response
     */
    public function update(TrackingDetailsRequest $request, TrackingDetails $trackingDetails)
    {
        $trackingDetails->update([
            'package_details_id' => $request->input('package_details_id'),
            'tracking_no' => $request->input('tracking_no'),
            'delivery_status' => $request->input('delivery_status'),     
        ]);

        return new TrackingDetailsResource($trackingDetails);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackingDetails  $trackingDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackingDetails $trackingDetails)
    {
        $trackingDetails->delete();
        return response(null, 204);
    }
}
