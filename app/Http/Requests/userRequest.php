<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
         'login'=>'required|min:3|max:200',
          'password'=>'required|min:6|max:200',
          'role_id'=>'required|min:1|max:200',
          'firstname'=>'required|min:3|max:200',
          'lastname'=>'required|min:3|max:200',
          'email'=>'required|min:10|max:200',
          'langue'=>'required|min:2|max:200'
            
        ];
    }
}
