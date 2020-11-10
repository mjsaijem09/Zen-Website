<?php

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





/* Shops route starts here  */

Route::get('/', 'HomeController@index');
Route::get('shop/{id}', 'HomeController@view');

/* Shops route ends here  */
Route::get('getLatLng', 'HomeController@getLatLng');
Route::get('shops', 'HomeController@shopList');
Route::get('mapList', 'HomeController@mapList');
/* Services route starts here  */

Route::get('services', 'ServicesController@index');
Route::get('servicetype', 'ServicesController@serviceType');
Route::get('service/{id}', 'HomeController@serviceDetail');

/* Services route ends here  */


/* Therapists route starts here  */

Route::get('therapist', 'TherapistController@index');
Route::get('therapist/{id}', 'TherapistController@view');

/* Therapists route ends here  */

/* Giftcard route starts here  */
Route::get('giftcard', 'GiftCardController@index');

/* Promotions route starts here  */
Route::get('promotions', 'PromotionsController@index');

/* Blog route starts here  */
Route::get('blog', 'BlogController@index');
Route::get('blog/{id}', 'BlogController@view');

Route::get('set_session', 'HomeController@setSession'); // to set session for user location

Route::get('careers', 'CareerController@index');

/* HealthFund route starts here  */
Route::get('healthfund', 'HealthfundControlller@index');

/* Location */
Route::get('getlocation', 'HomeController@getAllLocations_view');
Route::post('getlocation', 'HomeController@getAllLocations_api');

/* Booking */ 
Route::get('BookAppointment/{id}', 'HomeController@BookAppointment');