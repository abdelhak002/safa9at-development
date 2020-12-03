<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\oneOfpaymentMethodsWithCurrency;
use App\Rules\withdraw_amount;

class tradeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        	'buy' 	=> 'required|numeric',
        	'sell' 	=> ['required','numeric', new withdraw_amount($this->request->get('from'))],
        	'to' 	=> 'required|string',
            'from'   => [
                'required','string', new oneOfpaymentMethodsWithCurrency($this->request)
            ],
        ];
    }
}
