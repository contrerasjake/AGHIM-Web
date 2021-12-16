<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\CarsResource;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CarsResource::collection(Car::all());
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
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $car = Car::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'model_year' => $request->input('model_year'),
            'brand' => $request->input('brand'),
            'color' => $request->input('color'),
            'speed' => $request->input('speed'),
            'transmission' => $request->input('transmission'),
            'engine' => $request->input('engine'),
            'capacity' => $request->input('capacity'),
            'plate_number' => $request->input('plate_number'),
            'rate' => $request->input('rate'),
        ]);

        // For Testing Purposes
        /*
        $faker = \Faker\Factory::create(1);
        $car = Car::create([
            'name' => $faker->name,
            'description' => $faker->sentence,
            'model_year' => $faker->year($max='now'),
            'brand' => $faker->company,
            'color' => $faker->colorName,
            'speed' => (string) $faker->numberBetween($min = 200, $max = 700),
            'transmission' => $faker->randomElement($array = array ('Automatic','Manual')),
            'engine' => $faker->randomElement($array = array ('Diesel','Gas')),
            'capacity' => $faker->randomElement($array = array ('4','6')),
            'plate_number' => $faker->secondaryAddress,
            'rate' => (string) $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100)
        ]);*/

        return new CarsResource($car);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return new CarsResource($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'model_year' => $request->input('model_year'),
            'brand' => $request->input('brand'),
            'color' => $request->input('color'),
            'speed' => $request->input('speed'),
            'transmission' => $request->input('transmission'),
            'engine' => $request->input('engine'),
            'capacity' => $request->input('capacity'),
            'plate_number' => $request->input('plate_number'),
            'rate' => $request->input('rate'),
        ]);

        return new CarsResource($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return response(null, 204);
    }
}
