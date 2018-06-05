<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class showRequest extends FormRequest
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
         'title'=>'required|min:3|max:200',
         'poster_url'=>'required|min:3|max:800',
         'location_id'=>'required|min:1|max:200',
         'bookable'=>'required|min:1|max:200',
         'price'=>'required|min:1|max:200'
         
       
            
        ];
    }
}
