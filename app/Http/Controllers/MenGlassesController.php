<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenGlassesController extends Controller
{
    public function menglasses()
    {
    	return view('frontend.menglasses');
    }
}
