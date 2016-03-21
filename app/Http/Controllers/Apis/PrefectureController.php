<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Prefecture;
use Illuminate\Http\Request;

class PrefectureController extends Controller
{
    /**
     * @var App\Models\Prefecture
     */
    protected $prefecture;

    public function __construct(Prefecture $prefecture)
    {
        $this->prefecture = $prefecture;
    }

    /**
     * Response all prefectures json data
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $prefectures = $this->prefecture->get();
        return response()->json([
            'items' => $prefectures->toArray(),
            'total' => $prefectures->count(),
        ]);
    }

    /**
     * Response cities json data
     *
     * @param int $prefectureId
     * @return Illuminate\Http\JsonResponse
     */
    public function cities($prefectureId)
    {
        $prefecture = $this->prefecture->find($prefectureId);
        return response()->json([
            'items' => $prefecture->cities->toArray(),
            'total' => $prefecture->cities->count(),
        ]);
    }
}
