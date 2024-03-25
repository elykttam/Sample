<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function __invoke()
    {
        return view('intro');
    }
}
