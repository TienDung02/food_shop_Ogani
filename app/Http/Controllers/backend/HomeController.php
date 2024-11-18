<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\frontend\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }
}
