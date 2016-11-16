<?php

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

Route::get('/','WebpageController@index');
Route::get('/local_tour','WebpageController@show_local_tour_page');
Route::get('/international_tour','WebpageController@show_intl_tour_page');
Route::get('/air_ticket','WebpageController@show_air_ticket_page');
Route::get('/bus_ticket','WebpageController@show_bus_ticket_page');
Route::get('/boat_ticket','WebpageController@show_boat_ticket_page');
