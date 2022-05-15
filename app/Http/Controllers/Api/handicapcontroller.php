<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HandicapResource;
use App\Http\Resources\SingleHandicapResource;
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
        return response(
            [
                'status' => 'ok',
                'data' => SingleHandicapResource::collection(handicap::orderBy('created_at', 'desc')->get())
            ],
            200,
            ['Content-type' => 'application/json']
        );
    }

    /**
     * add new handicap in the database
     * 
     * call this endpoint to store new handicap based on the given data
     * 
     * @bodyParam fullname string required the fullname of the handicap
     * @bodyParam adress string required the adress of the handicap
     * @bodyParam mobile_number string required the mobile number of the handicap or his host
     * @bodyParam year_of_birth integer required the year of birth for the handicap
     * @bodyParam ecocash_number integer the ecocash number of the handicap
     * @bodyParam lumitel_number integer the lumicash number of the handicap
     * @bodyParam bank_name string the name of the bank used by the handicap
     * @bodyParam bank_account_number string the number of the bank account used by the handicap
     * @bodyParam story string required the story of the handicap
     * @bodyParam needed_money integer required the amount of money for the operation
     * @bodyParam state_of_health string required the health of the patient can take those values (simple, bad, worst)
     * @bodyParam main_image string required the most important picture of the handicap
     * @bodyParam first_primary_image string just another picture of the handicap
     * @bodyParam second_primary_image string just another picture of the handicap the second one
     * @bodyParam donation_status string just the status of the donation process (not started, in progress, done)
     * @bodyParam user_id integer required the id of the user who gonna add the handicap
     * @bodyParam family_situation string required the state of his familly situation (orphans or with parents)
     * 
     * @response 201 {'status' => 'ok',
     *       'data' => [
     *            'message' => 'handicap created successfuly'
     *      ]}
     *
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
            'main_image' => 'required',
            'user' => 'required',
            'family_situation' => 'required'
        ]);

        $main_image = $request->file('main_image')->store('handicap/main');
        $first_prim_image = $request->file('first_primary_image')->store('handicap/secondary');
        $sec_prim_image = $request->file('second_primary_image')->store('handicap/secondary');

        $handicap = $request->all();
        $handicap['main_image'] = $main_image;
        $handicap['first_primary_image'] = $first_prim_image;
        $handicap['second_primary_image'] = $sec_prim_image;

        handicap::create($handicap);

        return response(
            [
                'status' => 'ok',
                'data' => [
                    'message' => 'successfuly created the new handicap'
                ]
            ],
            201,
            ['Content-Type' => 'application/json']
        );
    }

    /**
     * show one handicap
     * 
     * returns one handicap found using the id provided in the request query
     * 
     * @apiResource App\Http\Resources\HandicapResource
     * @apiResourceModel App\Models\handicap
     *
     * @param  \App\Models\handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function show(handicap $handicap)
    {
        return response([
            'status' => 'ok',
            'data' => [
                new HandicapResource($handicap)
            ]
        ], 201, ['Content-Type' => 'application/json']);
    }

    /**
     * Update the handicap
     * 
     * update the handicap related data
     * 
     * @bodyParam fullname string required the fullname of the handicap
     * @bodyParam adress string required the adress of the handicap
     * @bodyParam mobile_number string required the mobile number of the handicap or his host
     * @bodyParam year_of_birth integer required the year of birth for the handicap
     * @bodyParam ecocash_number integer the ecocash number of the handicap
     * @bodyParam lumitel_number integer the lumicash number of the handicap
     * @bodyParam bank_name string the name of the bank used by the handicap
     * @bodyParam bank_account_number string the number of the bank account used by the handicap
     * @bodyParam story string required the story of the handicap
     * @bodyParam needed_money integer required the amount of money for the operation
     * @bodyParam state_of_health string required the health of the patient can take those values (simple, bad, worst)
     * @bodyParam main_image string required the most important picture of the handicap
     * @bodyParam first_primary_image string just another picture of the handicap
     * @bodyParam second_primary_image string just another picture of the handicap the second one
     * @bodyParam donation_status string just the status of the donation process (not started, in progress, done)
     * @bodyParam user_id integer required the id of the user who gonna add the handicap
     * @bodyParam family_situation string required the state of his familly situation (orphans or with parents)
     * 
     * @response 201 {'status' => 'ok',
     *       'data' => [
     *            'message' => 'successfuly updated the handicap data'
     *      ]}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, handicap $handicap)
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
            'main_image' => 'required',
            'user' => 'required',
            'family_situation' => 'required'
        ]);

        $main_image = $request->file('main_image')->store('handicap/main');
        $first_prim_image = $request->file('first_primary_image')->store('handicap/secondary');
        $sec_prim_image = $request->file('second_primary_image')->store('handicap/secondary');

        $handicap_data = $request->all();
        $handicap_data['main_image'] = $main_image;
        $handicap_data['first_primary_image'] = $first_prim_image;
        $handicap_data['second_primary_image'] = $sec_prim_image;

        $handicap->update($handicap_data);

        return response(
            [
                'status' => 'ok',
                'data' => [
                    'message' => 'successfuly updated the handicap data'
                ]
            ],
            201,
            ['Content-Type' => 'application/json']
        );
    }

    /**
     * delete the handicap data
     * 
     * delete the handicap data from the database
     *
     * @response 201 {'status' => 'ok',
     *       'data' => [
     *            'message' => 'successfuly deleted the handicap data'
     *      ]}
     * 
     * @param  \App\Models\handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function destroy(handicap $handicap)
    {
        $handicap->delete();

        return response([
            'status' => 'ok',
            'data' => [
                'message' => 'successfuly deleted the handicap data'
            ]
        ]);
    }
}
