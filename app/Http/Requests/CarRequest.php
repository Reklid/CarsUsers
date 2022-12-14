<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' 		=> ['required', 'string'],
            'color' 	=> ['required', 'string']
        ];
    }
}
