<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productsListing()
    {
        return view('admin.product_listing');
    }
}
