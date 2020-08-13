<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SunGlassesController extends Controller
{
    public function sunglasses()
    {
    	return view('frontend.sunglasses');
    }
}
