<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * @var App\Models\Region
     */
    protected $region;

    public function __construct(Region $region)
    {
        $this->region = $region;
    }

    /**
     * Response all regions json data
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $regions = $this->region->get();
        return response()->json([
            'items' => $regions->toArray(),
            'total' => $regions->count(),
        ]);
    }

    /**
     * Response prefectures json data
     *
     * @param int $regionId
     * @return Illuminate\Http\JsonResponse
     */
    public function prefectures($regionId)
    {
        $region = $this->region->find($regionId);
        return response()->json([
            'items' => $region->prefectures->toArray(),
            'total' => $region->prefectures->count(),
        ]);
    }

    /**
     * Response cities json data
     *
     * @param int $regionId
     * @return Illuminate\Http\JsonResponse
     */
    public function cities($regionId)
    {
        $region = $this->region->find($regionId);
        return response()->json([
            'items' => $region->cities->toArray(),
            'total' => $region->cities->count(),
        ]);
    }
}
