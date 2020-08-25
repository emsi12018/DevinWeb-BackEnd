<?php

namespace App\Http\Controllers;

use App\Deliverytime;
use App\City;
use Illuminate\Http\Request;


class DeliverytimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliverytimes = Deliverytime::All();

        return $deliverytimes->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        Deliverytime::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deliverytime  $deliverytime
     * @return \Illuminate\Http\Response
     */
    public function show(Deliverytime $deliverytime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverytime  $deliverytime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverytime $deliverytime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deliverytime  $deliverytime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverytime $deliverytime)
    {
        //
    }

}
