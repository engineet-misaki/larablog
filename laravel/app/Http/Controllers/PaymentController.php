<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Config;


class PaymentController extends Controller
{
    /*単発決済用のコード*/
    public function pay(Request $request)
    {
        $SECRET_PASS = config('tmp.SECRET_PASS');
        Stripe::setApiKey($SECRET_PASS);//シークレットキー

            $charge = Charge::create(array(
                'amount' => 100,
                'currency' => 'jpy',
                'source'=> request()->stripeToken,
            ));
        return back();
        
        
    }

    public function show()
    {
        return view('articles.pay');
    }
}