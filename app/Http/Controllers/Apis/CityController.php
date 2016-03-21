<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @var App\Models\City
     */
    protected $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    /**
     * Response city json data
     */
    public function get($cityId)
    {
        $city = $this->city->find($cityId);
        return response()->json([
            'items' => $city->toArray(),
            'prefecture' => $city->prefecture->toArray(),
            'region' => $city->region->toArray(),
        ]);
    }
}
