<?php

namespace App\Http\Controllers\frontend;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog.index');
    }
    public function detail()
    {
        return view('frontend.blog.details');
    }
}
