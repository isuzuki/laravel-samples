<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    protected $region;

    public function __construct(Region $region)
    {
        $this->region = $region;
    }

    public function prefectureN1()
    {
        $regions = $this->region->get();
        return view('region.prefecture', compact('regions'));
    }

    public function prefectureEager()
    {
        $regions = $this->region->with('prefectures')->get();
        return view('region.prefecture', compact('regions'));
    }

    public function prefectureItem()
    {
        $regions = $this->region->with('prefectures', 'prefectures.items')->get();
        return view('region.prefecture_item', compact('regions'));
    }

    public function cityN1()
    {
        $regions = $this->region->get();
        return view('region.city', compact('regions'));
    }

    public function cityEager()
    {
        $regions = $this->region->with('cities')->get();
        return view('region.city', compact('regions'));
    }
}
