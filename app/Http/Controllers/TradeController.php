<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trade;
use App\Exchange;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\tradeRequest;
use App\Http\Requests\fetchTradeRequest;
use App\Traits\createNotification;
use App\Traits\balanceTrait;

class TradeController extends Controller
{
    use createNotification;
    use balanceTrait;

// List of trades
    public function index(){

        $list_trades = Trade::where('user_id', Auth::id())->get();

        return view('trades.index', ['trades' => $list_trades]);
    }


    public function exchange($from, $to){
    	$exchange = DB::table('exchanges')
        ->where('status','on')
		->where(function($query) use ($from, $to) {
                $query->where('first_pm', $from)
                      ->where('second_pm', $to);
            })
            ->orWhere(function($query) use ($from, $to) {
                $query->where('first_pm', $to)
                      ->where('second_pm', $from);
            })
            ->first();
	    return $exchange;
    }



    function fetch(fetchTradeRequest $request)
    {
	 $sell_amount = $request->get('sell_amount');
	 $buy_amount = $request->get('buy_amount');

     $from = $request->get('from');
     $to = $request->get('to');

     $exchange = $this->exchange($from, $to);

     if($sell_amount != 0){

		    if($exchange->first_pm == $from){
		     	$res = $sell_amount * $exchange->sell;
		    }elseif($exchange->first_pm == $to){
		     	$res = $sell_amount / $exchange->buy;
		    }
	    }else{
	    	if($exchange->first_pm == $to){
		     	$res = $buy_amount * $exchange->buy;
		    }elseif($exchange->first_pm == $from){
		     	$res = $buy_amount / $exchange->sell;
		    }
	    }
         $res = floor($res * 100)/100;
	     return $res;
    }


// Make a trade
    public function create(){

        $exchanges = Exchange::where('status','on')->get();
    	return view('trades.create', ['exchanges' => $exchanges]);
    }


    // Save trade
    public function store(tradeRequest $request){

    	$from = $request->get('from');
    	$to = $request->get('to');

    	$sell_amount = $request->get('sell');
    	$buy_amount = $request->get('buy');

		$exchange = $this->exchange($from, $to);

        

        $this->Authorize('store', [Exchange::find($exchange->id), $from, $to, $sell_amount, $buy_amount]);


		if($from == $exchange->first_pm){

			if((floor(($sell_amount * $exchange->sell *100)) / 100) == $buy_amount){
				$bought = floor(($sell_amount * $exchange->sell *100)) / 100;
                $sold = $sell_amount;
			}


		}elseif($from == $exchange->second_pm){

			if((floor(($sell_amount / $exchange->buy * 100))/100) == $buy_amount){
				$bought = floor(($sell_amount / $exchange->buy * 100))/100;
                $sold = $sell_amount;
			}
		}



        $trade = new Trade;
        $trade->user_id = Auth::user()->id;
        $trade->exchange_id = $exchange->id;
        $trade->from    = $from;
        $trade->to      = $to;
        $trade->bought  = $bought;
        $trade->sold    = $sold;
        $trade->save();
       

        $this->balanceDown(Auth::id(), $from, $sold, "Trading", "trade/".$trade->id);
        $this->balanceUp(Auth::id(), $to, $bought, "Trading", "trade/".$trade->id);


        session()->flash('success', __('trade.completed'));
        
        $this->createNotification(Auth::id(),'tradeCreated','',url('trade/'.$trade->id));

        return redirect('trade');
    }

}
