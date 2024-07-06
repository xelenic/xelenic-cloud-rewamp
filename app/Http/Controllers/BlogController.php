<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $sliders = Blog::orderBy('created_at', 'desc')->take(5)->get();
        $nextrecocders = Blog::orderBy('created_at', 'desc')->skip(5)->take(6)->get();
        $subnews = Blog::orderBy('created_at', 'desc')->skip(10)->take(20)->get();

        return view('frontend.pages.blog.index',[
            'sliders' => $sliders,
            'nextPosts' => $nextrecocders,
            'subPosts' => $subnews,
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.pages.blog.show',[
            'blog' => $blog
        ]);
    }
}
