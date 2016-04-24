<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Site $site)
    {
        return view('item.index', [
            'items' => app('site')->items,
        ]);
    }
}
