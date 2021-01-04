<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function register()
    {
        return view('pages.merchant-register');
    }
}
