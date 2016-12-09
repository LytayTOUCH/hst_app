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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::get('/get_jason', 'WebpageController@get_json');

Route::get('/get_json', function(){
	// return '[{"name":"Jamely", "dob":"27-04-1988" }]';
	return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});