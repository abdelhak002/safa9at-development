<?php

namespace App\Policies;

use App\User;
use App\Balance;
use App\Exchange;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExchangePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
 	public function browse(){
        return true;
    }
    
    public function add(){
        return true;
    }

    public function delete(){
        return true;
    }

    public function edit(){
        return true;
    }

    public function read(){
        return true;
    }


    public function store(User $user, Exchange $exchange, string $from, string $to, float $sell_amount, float $buy_amount)
    {
        if($from == $exchange->first_pm){

            return floor(($sell_amount * $exchange->sell *100)) / 100 == $buy_amount;


        }elseif($from == $exchange->second_pm){

            return floor(($sell_amount / $exchange->buy * 100))/100 == $buy_amount;
        }
    }
}
