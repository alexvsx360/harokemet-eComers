<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class ContentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'menu_id' => 'required',
            'ctitle1' => 'min:0|max:50',
            'carticle1' => 'min:0',
            'ctitle2' => 'min:0|max:50',
            'carticle2' => 'min:0',
            'ctitle3' => 'min:0|max:30',
            'carticle3' => 'min:0',
        ];
    }
}
