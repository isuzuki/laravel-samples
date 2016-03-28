<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PjaxController extends Controller
{
    public function index()
    {
        return view('pjax.index');
    }

    public function about()
    {
        return view('pjax.about');
    }

    public function hello()
    {
        return view('pjax.hello');
    }
}
