<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementRequest extends FormRequest
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
            'name'=>'required|min:10|max:200',
            'content'=>'required|min:100|',
            'location' =>'required|min:2|max:20',
        ];
    }
    public function messages(){
        return [
            'name.required'=>trans('tpl.name.required'),
            'name.min'=>trans('tpl.name.min'),
            'name.max'=>trans('tpl.name.max'),
            'content.required'=>trans('tpl.content.required'),
            'content.min'=>trans('tpl.content.min'),
            'location.required'=>trans('tpl.location.required'),
            'location.min'=>trans('tpl.location.min'),
            'location.max'=>trans('tpl.location.max'),
        ];
    }
}
