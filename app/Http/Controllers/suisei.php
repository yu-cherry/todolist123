<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suisei extends Controller
{
    //
    public function test()
    {
        return 'suiseikawaii';
    }
    public function suisei()
    {
        return view('parges/index');
    }

}
