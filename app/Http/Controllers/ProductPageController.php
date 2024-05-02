<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function show($slug)
    {
        $getProducts = Products::where('slug', $slug)->first();
        return view('frontend.pages.products.product', [
            'productDetails' => $getProducts
        ]);
    }
}
