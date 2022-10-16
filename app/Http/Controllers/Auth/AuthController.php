<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\HttpResponses;

class AuthController extends Controller
{
    use HttpResponses;


    public function login(Request $request) {
        $user = $request->only(['username', 'password']);

        if (Auth::attempt($user)) {
            HttpResponses::success($user, 'user loged in successfully', 200);
        }
    }
}
