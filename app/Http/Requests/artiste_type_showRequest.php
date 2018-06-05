<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class artiste_type_showRequest extends FormRequest
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
         'artiste_type_id'=>'required|min:1|max:200',
         'show_id'=>'required|min:1|max:200'
            
        ];
    }
}

