<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MerchantRequest;
use App\Services\MerchantService;
use App\Models\Merchant;

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

    public function getSetupPayment($id)
    {
        $merchant = Merchant::where('external_merchant_id',$id)->first();
        return view('pages.setup-payment',compact('merchant'));
    }
}
