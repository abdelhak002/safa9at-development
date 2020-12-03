<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class oneOfpaymentMethodsWithCurrency implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $from = $value;
        $to = $this->request->get('to');

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
            ->count();

        return $exchange == 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('Sorry, payment method is not in the list of exchanges.');
    }
}
