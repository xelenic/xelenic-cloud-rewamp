<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        $blog_posts = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.pages.home.index', compact('blog_posts'));
    }

    public function xelauth()
    {
        return view('frontend.pages.products.xelauth');
    }
}
