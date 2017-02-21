<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {

    // cities
    Route::get(
        '/',
        'CitiesNeighborhoodsController@indexCity'
    );
    Route::resource(
        'cities',
        'CitiesNeighborhoodsController@indexCity'
    );

    // neighborhoods
    Route::resource(
        'neighborhoods',
        'CitiesNeighborhoodsController@indexNeighborhood'
    );

    // neighborhoods filtered by a city
    Route::resource(
        'cities/{id}/neighborhoods',
        'CitiesNeighborhoodsController@indexByCity'
    );

});
