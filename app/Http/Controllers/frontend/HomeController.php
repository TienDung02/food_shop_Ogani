<?php

namespace App\Http\Controllers\frontend;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }
}
