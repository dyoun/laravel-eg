<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Neighborhood;
use Illuminate\Http\Request;

class CitiesNeighborhoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCity()
    {
        $city = City::orderBy('name')->get();
        return json_encode($city->toArray());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByCity($id)
    {
        $neighborhood = Neighborhood::where('city_id', '=', $id)->get();
        return json_encode($neighborhood->toArray());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexNeighborhood()
    {
        $neighborhood = Neighborhood::all();
        return json_encode($neighborhood->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCity(Request $request)
    {
        $city = new City();
        $city->create([
            'name' => $request->get('name'),
        ]);

        return json_encode([
            'status' => 'created',
            'data'   => $city->toArray(),
        ]);
    }
}
