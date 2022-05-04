<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;


/**
 * 
 * @group Role management endpoints
 * @authenticated
 * 
 * List of endpoints for managing roles
 * 
 */
class RoleController extends Controller
{
    
    /**
     * 
     * Show all roles
     * 
     * endpoint to show all the roles available in the system
     * 
     * @apiResourceCollection App\Http\Resources\RoleResource
     * @apiResourceModel App\Models\Role
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response([
            'status' => 'ok',
            'data' => RoleResource::collection(Role::orderBy('created_at', 'desc')->paginate(3))]
        , 200);
    }

    /**
     * store new role
     * 
     * endpoint to store new role in database
     * 
     * @bodyParam name string required the name of the role
     * @bodyParam user_id integer required the id of the user who created the new role
     * 
     * @response 201 {'status' => 'ok',
            'data' => [
                'message' => 'role created successfuly'
            ]}
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Role::create($request->all());

        return Response([
            'status' => 'ok',
            'data' => [
                'message' => 'role created successfuly'
            ]
        ]);
    }

    /**
     * 
     * show a role
     * 
     * give the details of one role
     * 
     * @urlParam id integer required id of the role
     * 
     * @apiResource App\Http\Resources\RoleResource
     * @apiResourceModel App\Models\Role
     * 
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return Response([
            'status' => 'ok',
            'data' => new RoleResource($role)
        ]);
    }

    /**
     * 
     * update a role
     * 
     * endpoint to update a role with given id
     * 
     * @urlParam id integer required id of the role
     * 
     * @bodyParam name string required the name of the role
     * @bodyParam user_id integer required the id of the user who created the new role
     * 
     * @response 201 {'status' => 'ok',
            'response' => [
                'message' => 'role updated successfuly'
            ]}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role->update($request->all());

        return Response([
            'status' => 'ok',
            'response' => [
                'message' => 'role updated successfuly'
            ]
        ]);
    }

    /**
     * Remove a role
     * 
     * endpoint to delete a role from the system
     * 
     * @urlParam id integer required id of the role to delete
     * 
     * @response 200 {'status' => 'ok',
            'response' => [
                'message' => 'role deleted'
            ]}
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return Response([
            'status' => 'ok',
            'response' => [
                'message' => 'role deleted'
            ]
        ]);
    }
}
