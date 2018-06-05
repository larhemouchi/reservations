<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class representationRequest extends FormRequest
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
         'show_id'=>'required|min:1|max:200',
         'when'=>'required|min:2|max:200',
         'location_id'=>'required|min:1|max:200'
        
            
        ];
    }
}
