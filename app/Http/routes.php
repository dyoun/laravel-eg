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

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {

    // cities
    Route::get('/', 'CitiesController@index');
    Route::resource('cities', 'CitiesController');

    // neighborhoods
    Route::resource('neighborhoods', 'NeighborhoodsController@index');

    // neighborhoods filtered by a city
    Route::resource('cities/{id}/neighborhoods', 'NeighborhoodsController@indexByCity');

});
