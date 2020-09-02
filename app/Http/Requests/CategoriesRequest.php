<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoriesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        $ignore = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'ctitle' => 'required|min:2|max:30',
            'curl' => 'required|min:2|max:30|regex:/^[a-z\d-]+$/|unique:Categories,curl' . $ignore,
            'carticle' => 'required|min:2|max:30',
            'image' => 'image|max:10485760',
        ];
    }
}
