<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Response all artists json data
     *
     * @param App\Models\Artist $artist
     * @return Illuminate\Http\JsonResponse
     */
    public function all(Artist $artist)
    {
        $artists = $artist->get();

        return response()->json([
            'items' => $artists->toArray(),
            'total' => $artists->count(),
        ]);
    }
}
