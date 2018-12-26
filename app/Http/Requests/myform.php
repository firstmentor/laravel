<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class myform extends FormRequest
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

            'name' => 'required',
            'email' => 'required |max :20|min:8|email|unique: students',
            'age' => 'required'   
        ];
    }

    public function messages()
    {
        return [
              
              'name.required'=>'Name should be filled',
              'email.required' => 'email should be filled',
              'email.min' =>'Lenght should be more than 8'


        ];
    }
}
