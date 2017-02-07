<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('authenticate', 'AuthenticateController@authenticate');

Route::group(['middleware' => ['jwt.auth', 'jwt.refresh']], function () {

    Route::get('aircrafts', 'AircraftController@index')->name('aircrafts');
    Route::get('aircraft/{type}', 'AircraftController@show')->name('showAircraft');

});