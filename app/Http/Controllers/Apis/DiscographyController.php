<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Discography;
use Illuminate\Http\Request;

class DiscographyController extends Controller
{
    /**
     * @var App\Models\Discography
     */
    protected $discography;

    public function __construct(Discography $discography)
    {
        $this->discography = $discography;
    }

    /**
     * Response all discographies json data
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $discographies = $this->discography->get();
        return response()->json([
            'items' => $discographies->toArray(),
            'total' => $discographies->count(),
        ]);
    }
}
