<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\handicap;
use Illuminate\Http\Request;


/**
 * 
 *
 * @group handicap management endpoints
 * 
 * @authenticated
 * 
 * 
 **/

class handicapcontroller extends Controller
{
    /**
     * Show the list of all handicap
     * 
     * showing a list of the handicap with all their info needed to recognize them in the system
     *
     * @apiResourceCollection App\Http\Resources\HandicapResource
     * @apiResourceModel App\Models\handicap
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function show(handicap $handicap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, handicap $handicap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function destroy(handicap $handicap)
    {
        //
    }
}
