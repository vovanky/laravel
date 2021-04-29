<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newsRequest extends FormRequest
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
            'summary'=>'required|min:20|max:500',
            'content'=>'required|min:100|',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'bạn chưa nhập tên ',
            'summary.required'=>'bạn chưa nhập tóm tắt',
            'content.required'=>'bạn chưa nhập nội dung',
            'id_theloai.required'=>'bạn chưa nhập thể loại',
            'id_loaitin.required'=>'bạn chưa nhập loại tin',
            'status.required'=>'bạn chưa nhập trạng thái',
            'url_hinh.required'=>'bạn chưa nhập hình',
        ];
    }
}
