<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Traits\HttpResponses;

class AuthController extends Controller
{
    // use HttpResponses;

    public function login(Request $request)
    {
        $credentials = $request->only(['username', 'password']);

        if (Auth::attempt($credentials)) {
            // $this->success($user, 'user loged in successfully', 200);
            $user = User::where('username', $credentials['username'])->first();
            $token = $user->createToken('Token')->plainTextToken;
            return response([
                'user' => User
                            ::where('username', $credentials['username'])
                            ->get([
                                'fullname', 'number', 'adress'
                            ])->first(),
                'token' => $token]);
        } else {
            // $this->success(['error' => 'not recognized!'], 'not authorized', 401);
            return response(['message' => 'failure!'], 401);
        }
    }

    public function logout(Request $request) {}
}
