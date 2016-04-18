<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * post redirect get
 */
class PrgController extends Controller
{
    public function input()
    {
        return view('prg.input');
    }

    public function submit(Request $request)
    {
        $name = $request->input('name');
        $request->session()->put('name', $name);

        return redirect(route('prg.complete'));
    }

    public function complete(Request $request)
    {
        if (!$name = $request->session()->get('name')) {
            return redirect(route('prg.input'));
        }

        return view('prg.complete', [
            'name' => $name,
        ]);
    }
}
