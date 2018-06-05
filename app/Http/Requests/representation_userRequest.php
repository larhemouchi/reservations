<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class representation_userRequest extends FormRequest
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
         'representation_id'=>'required|min:1|max:200',
         
         'places'=>'required|min:1|max:200'
        
            
        ];
    }
}
