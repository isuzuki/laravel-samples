<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    protected $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function register()
    {
        $store = $this->store;

        $store->name = str_random(30);
        $store->save();
    }

    public function update($id)
    {
        $store = $this->store->findOrFail($id);

        $store->name = str_random(30);
        $store->save();
    }
}
