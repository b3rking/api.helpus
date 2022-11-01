<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;


class UserRepository {

    public function validate(Request $request) {
        $validated = Validator::make($request->all(), [
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if ($validated->fails()) {
            return ['errors' => $validated->errors()];
        }
    }

    public function store(Request $request) {
        
        $this->validate($request);

        $data = $request->all();

        $data['avatar'] = $request->file('avatar')->store('avatar');

        User::create($data);
    }
}