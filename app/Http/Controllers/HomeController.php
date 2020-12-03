<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Balance;
use App\PaymentMethod;
use App\Currency;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {

        $balances = Auth::user()->balances->first();
        $paymentMethods = PaymentMethod::where('status','on')->get();
        $currencies = Currency::get();

        return view('home', ['balance' => $balances,'paymentMethods' => $paymentMethods,'currencies' => $currencies]);
    }
}
