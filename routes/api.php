<?php

use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'user'], function () {
  Route::post('/register', 'Auth\RegisterController@jsonCreate');
  Route::get('/vehicles', function() {
    return Auth::user()->vehicles()->with('vehicleStats')->get();
  })->middleware('auth:api');
  Route::post('/vehicles/{vehicle}/stat', 'VehicleController@apiVehicleStatAdd')->middleware('auth:api');
  Route::post('/update', 'UserController@jsonUpdate')->middleware('auth:api');
});

Route::group(['prefix' => 'vehicle'], function () {
  Route::post('/create', 'VehicleController@jsonCreate')->middleware('auth:api');
});
