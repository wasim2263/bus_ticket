<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WasimViewController extends Controller
{
    public function wasimView(Request $request)
    {
        $data = array();
        for($i = 0; $i < 20;$i++){
             $data[$i] = $i;

        }
        return view('wasim-view', compact('data'));
    }
}
