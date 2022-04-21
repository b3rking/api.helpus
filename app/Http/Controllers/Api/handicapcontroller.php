<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HandicapResource;
use App\Models\handicap;
use App\Models\Image;
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
        return response([
                'status' => 'ok',
                'data' => HandicapResource::collection(handicap::orderBy('created_at', 'desc')->paginate(5))]
            , 200, ['Content-type' => 'application/json']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fullname' => 'required|text|min:10',
            'adress' => 'required|min:4',
            'mobile_number' => 'required|min:6',
            'year_of_birth' => 'required',
            'ecocash_number' => 'min:6',
            'lumicash_number' => 'min:6',
            'bank_name' => 'min:3',
            'bank_account_number' => 'min:3',
            'story' => 'required|min:30',
            'needed_money' => 'required|min:1',
            'state_of_health' => 'required',
            'images' => 'required',
            'user' => 'required',
            'family_situation' => 'required'
        ]);

        // TODO
        // create three images keys 
        // handicap_pic_1
        // handicap_pic_2
        // handicap_pic_3
        // update the handciap factory
        // update the handciap model
        // update the handciap migration
        // finally implement the storing method!

        return response(
            [
                'status' => 'ok',
                'data' => [
                    'message' => 'successfuly created the new handicap'
                ]
                ], 201, ['Content-Type' => 'application/json']            
            );
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
