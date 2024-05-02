<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function show($slug)
    {
        return view('frontend.pages.products.product', compact('slug'));
    }
}
