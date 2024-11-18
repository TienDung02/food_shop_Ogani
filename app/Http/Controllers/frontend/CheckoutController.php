<?php

namespace App\Http\Controllers\frontend;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout.index');
    }
}
