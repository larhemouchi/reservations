<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class locationRequest extends FormRequest
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
         'slug'=>'required|min:3|max:200',
         'designation'=>'required|min:3|max:200',
         
         'adresse'=>'required|min:3|max:200',
         'locality_id'=>'required|min:1|max:200',
         'website'=>'required|min:9|max:200',
         'phone'=>'required|min:8|max:200'
        ];
    }
}
