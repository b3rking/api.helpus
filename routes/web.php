<?php

// use Illuminate\Http\Client\Request;
// use Illuminate\Http\Request;

use App\Http\Controllers\Api\RoleController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('docs', function() {
    return view('scribe.index');
});

Route::get('/form', function(Request $request) {
    return view('some_test');
});

Route::post('t_files_u', [RoleController::class, 'test_file'])->name('t_files_u');