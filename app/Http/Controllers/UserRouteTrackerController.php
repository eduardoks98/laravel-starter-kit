<?php

namespace App\Http\Controllers;

use App\Models\UserRouteTracker;
use App\Http\Requests\StoreUserRouteTrackerRequest;
use App\Http\Requests\UpdateUserRouteTrackerRequest;

class UserRouteTrackerController extends Controller
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
     * @param  \App\Http\Requests\StoreUserRouteTrackerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRouteTrackerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRouteTracker  $UserRouteTracker
     * @return \Illuminate\Http\Response
     */
    public function show(UserRouteTracker $UserRouteTracker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRouteTracker  $UserRouteTracker
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRouteTracker $UserRouteTracker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRouteTrackerRequest  $request
     * @param  \App\Models\UserRouteTracker  $UserRouteTracker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRouteTrackerRequest $request, UserRouteTracker $UserRouteTracker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRouteTracker  $UserRouteTracker
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRouteTracker $UserRouteTracker)
    {
        //
    }
}
