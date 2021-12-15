<?php

namespace App\Http\Controllers;

use App\Models\CarOwner;
use App\Http\Requests\CarOwnerRequest;
use App\Http\Requests\StoreCarOwnerRequest;
use App\Http\Requests\UpdateCarOwnerRequest;
use App\Http\Resources\CarOwnersResource;

class CarOwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CarOwnersResource::collection(CarOwner::all());
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
     * @param  \App\Http\Requests\StoreCarOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarOwnerRequest $request)
    {
        $carOwner = CarOwner::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact')
        ]);

        return new CarOwnersResource($carOwner);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarOwner  $carOwner
     * @return \Illuminate\Http\Response
     */
    public function show(CarOwner $carOwner)
    {
        return new CarOwnersResource($carOwner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarOwner  $carOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(CarOwner $carOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarOwnerRequest  $request
     * @param  \App\Models\CarOwner  $carOwner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarOwnerRequest $request, CarOwner $carOwner)
    {
        $carOwner->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact')
        ]);

        return new CarOwnersResource($carOwner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarOwner  $carOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarOwner $carOwner)
    {
        $carOwner->delete();
        return response(null, 204);
    }
}
