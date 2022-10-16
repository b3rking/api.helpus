<?php

namespace App\Traits;


class HttpResponses {

    public function success($data, $message=null, $status_code=200) {
        return response([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $status_code);
    }
    
    public function failure($data, $message=null, $status_code=200) {
        return response([
            'status' => 'failed',
            'message' => $message,
            'data' => $data,
        ], $status_code);
    }
}