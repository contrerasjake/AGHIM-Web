<?php

namespace App\Http\Controllers;

use App\Models\PackageDetails;
use App\Http\Requests\PackageDetailsRequest;
use App\Http\Resources\PackageDetailsResource;

class PackageDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PackageDetailsResource::collection(PackageDetails::all());
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
     * @param  \App\Http\Requests\PackageDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageDetailsRequest $request)
    {
        $packageDetails = PackageDetails::create([
            'user_id' => $request->input('user_id'),
            'pickup_location' => $request->input('pickup_location'),
            'dropoff_location' => $request->input('dropoff_location'),
            'receiver_name' => $request->input('receiver_name'),
            'receiver_contact' => $request->input('receiver_contact'),
            'pickup_date' => $request->input('pickup_date'),
            'pickup_time' => $request->input('pickup_time'),
            'weight' => $request->input('weight'),
            'amount' => $request->input('amount'),
            'parcel_description' => $request->input('parcel_description')         
        ]);

        return new PackageDetailsResource($packageDetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PackageDetails $packageDetails)
    {
        return new PackageDetailsResource($packageDetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageDetails $packageDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PackageDetailsRequest  $request
     * @param  \App\Models\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function update(PackageDetailsRequest $request, PackageDetails $packageDetails)
    {
        $packageDetails->update([
            'user_id' => $request->input('user_id'),
            'pickup_location' => $request->input('pickup_location'),
            'dropoff_location' => $request->input('dropoff_location'),
            'receiver_name' => $request->input('receiver_name'),
            'receiver_contact' => $request->input('receiver_contact'),
            'pickup_date' => $request->input('pickup_date'),
            'pickup_time' => $request->input('pickup_time'),
            'weight' => $request->input('weight'),
            'amount' => $request->input('amount'),
            'parcel_description' => $request->input('parcel_description')         
        ]);

        return new PackageDetailsResource($packageDetails);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageDetails  $packageDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageDetails $packageDetails)
    {
        $packageDetails->delete();
        return response(null, 204);
    }
}
