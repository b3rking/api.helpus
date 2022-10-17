<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\HttpResponses;

class AuthController extends Controller
{
    // use HttpResponses;

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:4'
        ]);

        $credentials = $request->only(['username', 'password']);

        if (Auth::attempt($credentials)) {
            // $this->success($user, 'user loged in successfully', 200);
            $user = User::where('username', $credentials['username'])->first();
            $token = $user->createToken($user->username.' token')->plainTextToken;
            return response([
                'user' => $user,
                'token' => $token,
                'auth' => Auth::user()]);
        } else {
            // $this->success(['error' => 'not recognized!'], 'not authorized', 401);
            return response(['message' => 'failure!'], 401);
        }
    }

    public function logout(Request $request) {
        $user = User::findOrFail($request->id);
        $user->tokens()->delete();
        return $user;
    }
}
