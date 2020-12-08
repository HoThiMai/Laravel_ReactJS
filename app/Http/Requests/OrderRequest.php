<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'email'=>'required|email',
            'phone'=>'required|min:6|max:20',
            'address'=>'required|min:6',
            'note'=>'required',
           
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Something went wrong with name',
            'email.required'=>'Something went wrong with email',
            'email.email'=>'Something went wrong with email',
            'phone.required'=>'Phone not valid',
            'phone.min'=>'Phone not valid',
            'phone.max'=>'Phone not valid',
            'note.required'=>'Note confirmed',
            'address.required'=>'Something went wrong with address',
            'address.min'=>'Something went wrong with address',
        ];
    }
}
