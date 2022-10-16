<?php

namespace App\Traits;


class HttpResponses {

    /**
     * 
     * @param Array $data a array containing to return in response
     * @param string $message a string with a simple message about the operation
     * @param int status_code a http code corresponding to the response returned
     */
    public static function success(Array $data, string $message='', int $status_code=200) {
        return response([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $status_code);
    }
    
    /**
     * 
     * @param Array $data a array containing to return in response
     * @param string $message a string with a simple message about the operation
     * @param int status_code a http code corresponding to the response returned
     */
    public function failure(Array $data, string $message='', int $status_code) {
        return response([
            'status' => 'failed',
            'message' => $message,
            'data' => $data,
        ], $status_code);
    }
}