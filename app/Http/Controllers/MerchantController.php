<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MerchantRequest;
use App\Services\MerchantService;

class MerchantController extends Controller
{
    public function getRegisterForm()
    {
        return view('pages.merchant-register');
    }

    public function register(MerchantRequest $request)
    {
        $res = (new MerchantService())->registerMerchant($request->all());

        if($res){
            return view('pages.merchant-register-success');
        }
    }

    public function getSetupPayment()
    {
        return view('pages.setup-payment');
    }
}
