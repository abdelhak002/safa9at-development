<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function payment(){
    	return $this->belongsTo('App\Payment');
    }
}
