<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductPageController extends Controller
{
    public function show($slug)
    {
        $getProducts = Products::where('slug', $slug)->first();
        return view('frontend.pages.products.product', [
            'productDetails' => $getProducts
        ]);
    }

    public function index()
    {
        $products = Products::where('showing_frontend', 1)
            ->select('category_id', DB::raw('count(*) as total'),DB::raw('count(*) as name'))
            ->groupBy('category_id')->get();

        return view('frontend.pages.products.products-list', [
            'products' => $products
        ]);
    }
}
