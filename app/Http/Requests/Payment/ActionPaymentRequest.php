<?php

namespace App\Http\Requests\Payment;

use App\Http\Requests\Request;
use App\Models\Payment;

class ActionPaymentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize() : bool
    {
        return auth()->user()->can('edit', $this->payment);
    }

}