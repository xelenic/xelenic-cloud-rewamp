<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchAndDevController extends Controller
{
    public function index()
    {
        return view('frontend.pages.research-and-development.index');
    }
}
