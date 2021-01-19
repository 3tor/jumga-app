<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CardPaymentRequest;

class CardPaymentsController extends Controller
{
    public function setupCardPayment(CardPaymentRequest $request)
    {
        dd($request->all());
    }
}
