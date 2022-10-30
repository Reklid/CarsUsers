<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'	=> ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string']
        ];
    }
}
