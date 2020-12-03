<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;
use Carbon\Carbon;
use App\Payment;

class PaymentPolicy extends \TCG\Voyager\Policies\BasePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function before($user, $ability) {
    /*if (Auth::user()->hasRole('admin')) {
        return true;
    }*/
	}


    public function cancel(User $user, Payment $payment){
        

        $cancelledToday = Payment::where('user_id',$user->id)->where('the_status','cancelled')->wheredate('created_at','>=',Carbon::today())->get()->count();
        
        $date = Carbon::today()->subDays(7);
        $cancelledThisWeek = Payment::where('user_id',$user->id)->where('the_status','cancelled')->wheredate('created_at','>=',$date)->get()->count();

        if(($cancelledToday <= 1) OR ($cancelledThisWeek <= 3)){
            if($payment->the_status == 'open'){
                return $user->id == $payment->user_id;
            }
        }
        return false;
    }

    public function pending(User $user, Payment $payment){
        if($payment->the_status == 'open'){
            return $user->id == $payment->creator_id;
        }
        return false;
    }

    public function accept(User $user, Payment $payment){
        if($payment->the_status == 'pending' OR $payment->the_status == 'open'){
            return $user->id == $payment->creator_id;
        }
        return false;
    }


    public function pay(User $user, Payment $payment){
        if($payment->the_status == 'accepted' AND $payment->server_status == 'in review'){
            return Auth::user()->hasRole('admin');
        }
        return false;
    }


    public function refund(User $user, Payment $payment){
        if($payment->the_status == 'accepted' AND $payment->server_status != 'paid'){
            return $user->id == $payment->creator_id;
        }
        return false;
    }

    public function refuse(User $user, Payment $payment){
        if($payment->the_status == 'pending' OR $payment->the_status == 'open'){
            return $user->id == $payment->creator_id;
        }
        return false;
    }

    public function create_offer(User $user, Payment $payment){
        if($payment->the_status == 'pending' OR $payment->the_status == 'open'){
            return $user->id == $payment->creator_id;
        }
        return false;
    }
}
