<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

/**
 * 
 * @group Users management endpoints
 * 
 * @authenticated
 */
class UserController extends Controller
{
    /**
     * 
     * show all users
     * 
     * see all user with they info and everything relate to them
     * this is not the handicap data it's only users data 
     * like admins or simple user.
     * 
     * @apiResourceCollection App\Http\Resources\User
     * @apiResourceModel App\Models\User
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response([
            'status' => 'ok',
            'data' => User::all()]
        , 200, ['Content-type' => 'application/json']);
    }

    /**
     * Store a new user
     * 
     * this endpoint store a new user based on the data passed in the request
     * <aside class="notice">make sure to pass all the the required data</aside>
     *
     * 
     * @bodyParam fullname string required this user fullname
     * @bodyParam username string required this user username
     * @bodyParam role_id integer this user role in the system
     * @bodyParam password string required this user role in the system
     * @bodyParam adress string this user adress
     * @bodyParam number integer this user mobile number
     * @bodyParam avatar string this user avatar link
     * 
     * @response 201 {
     *       'status' => 'ok',
     *       'data' => [
     *           'message' => 'successfuly created the account'
     *      ]
     *   }
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = $request->all();

        $data['avatar'] = $request->file('avatar')->store('avatar');

        User::create($data);

        return Response([
            'status' => 'ok',
            'data' => [
                'message' => 'successfuly created the account'
            ]], 201);
    }

    /**
     * show one user
     * 
     * endpoint which returns the data of the specified with all his data.
     * 
     * @urlParam id integer required id of the user
     * 
     * @apiResource App\Http\Resources\User
     * @apiResourceModel App\Models\User
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Response([
            'status' => 'ok',
            'data' => new UserResource($user)
        ], 200);
    }

    /**
     * Update a user.
     * 
     * endpoint to update one user 
     * 
     * @urlParam id int required id of the user to update
     * 
     * @bodyParam fullname string required this user fullname
     * @bodyParam username string required this user username
     * @bodyParam role_id integer this user role in the system
     * @bodyParam password string required this user role in the system
     * @bodyParam adress string this user adress
     * @bodyParam number integer this user mobile number
     * @bodyParam avatar string this user avatar link
     * 
     * @response 201 {
            'status' => 'ok',
            'data' => [
                'message' => 'successfuly updated the account'
            ]
     *   }
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
            'data' => [
                'message' => 'successfuly updated the account'
            ]
        ], 201);
    }

    /**
     * Remove the specified user
     * 
     * endpoint to remove the user with given id
     * 
     * @response {
            'status' => 'ok',
            'response' => [
                'message' => 'successfuly deleted the account'
            ]
            }
     *
     * @urlParam id integer required id of the user to delete
     * 
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        
        return Response([
            'status' => 'ok',
            'data' => [
                'message' => 'successfuly deleted the account'
            ]
        ], 201);
    }
}
