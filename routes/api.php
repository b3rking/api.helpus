<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function() {
    return response(['msg' => 'welcome on the helpus api'], 200);
});

Route::apiResource('users', UserController::class);
Route::apiResource('roles', RoleController::class);


// Content-Security-Policy "default-src 'self' http://www.just4bettors.mobi; script-src 'self' 'unsafe-inline' 'unsafe-eval'; img-src 'self' http://placehold.it https://ssl.google-analytics.com https://s-static.ak.facebook.com https://assets.zendesk.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://fonts.gstatic.com  https://themes.googleusercontent.com https://assets.zendesk.com; font-src 'self' https://themes.googleusercontent.com https://fonts.gstatic.com; frame-src 'self'; object-src 'none'; connect-src http://just4bettors.mobi http://just4bettors.mobi:1337 http://www.just4bettors.mobi http://www.desktop.just4bettors.mobi;";