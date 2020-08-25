<?php

namespace App\Http\Controllers;

use App\CityDeliverytime;
use Illuminate\Http\Request;
use App\Http\Resources\City_deliverytimeResource;

class CityDeliverytimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city_deliverytime = CityDeliverytime::All();

        return $city_deliverytime->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($city_id, Request $request)
    {
        $city_deliverytime = CityDeliverytime::create([
            'city_id' => $city_id,
            'deliverytime' => $request->deliverytime,
          ]);
    
        return new City_deliverytimeResource($city_deliverytime);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CityDeliverytime  $cityDeliverytime
     * @return \Illuminate\Http\Response
     */
    public function show(CityDeliverytime $cityDeliverytime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CityDeliverytime  $cityDeliverytime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CityDeliverytime $cityDeliverytime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CityDeliverytime  $cityDeliverytime
     * @return \Illuminate\Http\Response
     */
    public function destroy(CityDeliverytime $cityDeliverytime)
    {
        //
    }
}
