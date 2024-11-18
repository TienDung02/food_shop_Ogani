<?php

namespace App\Http\Controllers\frontend;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.shop.index');
    }
    public function detail()
    {
        return view('frontend.shop.details');
    }
    public function cart()
    {
        return view('frontend.shop.cart');
    }
}
