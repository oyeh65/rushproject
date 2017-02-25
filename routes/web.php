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
Route::group(['middleware'=>['web']], function(){
  Route::post('/login','logcontroller@log');
  Route::get('/login','logcontroller@view');
  Route::get('/admin', 'AdminController@view');
  Route::get('/logout','logcontroller@logout');
  Route::get('/admin/addrestaurant', 'restaurantController@view');
  Route::post('/admin/addrestaurant','restaurantController@add');
  Route::get('/admin/restaurant','AdminController@restaurantview');
  Route::get('/admin/restaurant/luxury','AdminController@luxuryview');
  Route::get('/admin/restaurant/casual','AdminController@casualview');
  Route::get('/admin/restaurant/eatery','AdminController@eateryview');
  Route::get('/admin/restaurant/detail/{id}','restaurantController@viewdetail');
  Route::get('/admin/restaurant/place/{id}','restaurantController@viewrestaurant');
  Route::get('/admin/restaurant/detail/{id}/edit','restaurantController@vieweditdetail');
  Route::patch('/admin/restaurant/detail/{id}/edit','restaurantController@editdetail');
  Route::get('/admin/restaurant/detail/{id}/delete','restaurantController@delete');
});
