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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize']], function(){
  Route::get('/','WebpageController@index');
  Route::get('/domestic_tour.html','WebpageController@show_local_tour_page');
  Route::get('/international_tour.html','WebpageController@show_intl_tour_page');
  Route::get('/air_ticket.html','WebpageController@show_air_ticket_page');
  Route::get('/bus_ticket.html','WebpageController@show_bus_ticket_page');
  Route::get('/boat_ticket.html','WebpageController@show_boat_ticket_page');
  Route::get('/international_visa.html','WebpageController@show_intl_visa_page');
  Route::get('/khmer_visa_renew.html','WebpageController@show_khmer_visa_renew_page');
  Route::get('/khmer_passport.html','WebpageController@show_khmer_passport_page');
  Route::get('/contact_us.html','WebpageController@show_contact_us_page');
});
