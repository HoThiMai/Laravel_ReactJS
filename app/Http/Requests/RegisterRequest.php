<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            're_password'=>'required|same:password',
           
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Something went wrong with name',
            'email.unique'=>'Email have exist',
            'email.required'=>'Something went wrong with email',
            'email.email'=>'Something went wrong with email',
            'password.required'=>'Password not valid',
            'password.min'=>'Password not valid',
            'password.max'=>'Password not valid',
            're_password.required'=>'Not confirmed',
            're_password.same'=>'Not confirmed',
        ];
    }
}
