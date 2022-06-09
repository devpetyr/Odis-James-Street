<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Stripe;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function stripe_payment($email, $token, $price, $desc){
        /* stripe */
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token
        ));
        $charge = Stripe\Charge::create ([
        "customer" => $customer->id,
        "amount" => $price * 100,
        "currency" => "usd",
        "description" => $desc
        ]);
        return $charge;
    }

}
