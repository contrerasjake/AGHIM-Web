<?php

namespace App\Http\Controllers;

use App\Models\OwnerCar;
use App\Http\Requests\StoreOwnerCarRequest;
use App\Http\Requests\UpdateOwnerCarRequest;

class OwnerCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreOwnerCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OwnerCar  $ownerCar
     * @return \Illuminate\Http\Response
     */
    public function show(OwnerCar $ownerCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OwnerCar  $ownerCar
     * @return \Illuminate\Http\Response
     */
    public function edit(OwnerCar $ownerCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOwnerCarRequest  $request
     * @param  \App\Models\OwnerCar  $ownerCar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnerCarRequest $request, OwnerCar $ownerCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OwnerCar  $ownerCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(OwnerCar $ownerCar)
    {
        //
    }
}
