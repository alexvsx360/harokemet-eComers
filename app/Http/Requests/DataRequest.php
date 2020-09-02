<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Session;

class DataRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {

        return [
            'name' => 'max:50',
            'first_name' => 'max:50',
            'last_name' => 'max:50',
            'email' => 'email|unique:users,email,' . Session::get('user_id'),
            'address' => 'max:70',
            'phone' => 'required|numeric',
            'country' => 'max:70',
            'state' => 'max:70',
            'zip' => 'required',

        ];
    }
}
