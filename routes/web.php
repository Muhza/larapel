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


Route::get('/', 'HouseController@index')->name('landing-page');
Route::get('/list-property', 'HouseController@list')->name('house.list');
Route::get('/list-property/loc/{id}', 'HouseController@listByLoc')->name('house.list.location');
Route::get('/list-property/cat/{id}', 'HouseController@listByCat')->name('house.list.category');
Route::get('/property/id/{id}', 'HouseController@show')->name('house.show');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
