<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response([
            'status' => 'ok',
            'response' => UserResource::collection(User::orderBy('created_at', 'desc')->paginate(3))]
        , 200);
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
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        User::create($request->all());

        return Response([
            'status' => 'ok',
            'response' => [
                'message' => 'successfuly created the account'
            ]
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Response([
            'status' => 'ok',
            'response' => new UserResource($user)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $user->update($request->all());

        return Response([
            'status' => 'ok',
            'response' => [
                'message' => 'successfuly updated the account'
            ]
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        
        return Response([
            'status' => 'ok',
            'response' => [
                'message' => 'successfuly deleted the account'
            ]
        ], 201);
    }
}
