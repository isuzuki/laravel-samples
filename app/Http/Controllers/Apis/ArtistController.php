<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * @var App\Models\Artist
     */
    protected $artist;

    public function __construct(Artist $artist)
    {
        $this->artist = $artist;
    }

    /**
     * Response all artists json data
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $artists = $this->artist->get();

        return response()->json([
            'items' => $artists->toArray(),
            'total' => $artists->count(),
        ]);
    }

    /**
     * Response discographies json data that owns the artist
     *
     * @param int $artistId
     * @return Illuminate\Http\JsonResponse
     */
    public function discographies($artistId)
    {
        $artist = $this->artist->find($artistId);

        return response()->json([
            'items' => $artist->discographies->toArray(),
            'total' => $artist->discographies->count(),
        ]);
    }

    /**
     * Response musics json data that owns the artist
     *
     * @param int $artistId
     * @return Illuminate\Http\JsonResponse
     */
    public function musics($artistId)
    {
        $artist = $this->artist->find($artistId);

        return response()->json([
            'items' => $artist->musics->toArray(),
            'total' => $artist->musics->count(),
        ]);
    }
}
