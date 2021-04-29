<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required|min:5|max:200',
            'email' =>'required|unique:users,email',
            'password' =>'required|min:8|max|16'
        ];
    }
    public function messages(){
        return [
            'name.required'=>trans('tpl.name.required'),
            'name.min'=>trans('tpl.name.min'),
            'name.max'=>trans('tpl.name.max'),
            'email.required'=>trans('tpl.email.required'),
            'email.unique'=>trans('tpl.email.unique'),
            'password.required'=>trans('tpl.password.required'),
            'password.min'=>trans('tpl.password.min'),
            'password.max'=>trans('tpl.password.max'),
        ];
    }
}
