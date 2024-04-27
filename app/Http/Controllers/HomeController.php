<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('frontend.pages.home.index');
    }

    public function xelauth()
    {
        return view('frontend.pages.products.xelauth');
    }
}
