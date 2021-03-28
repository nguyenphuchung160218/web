<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestWeek extends FormRequest
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

    public function rules()
    {
        return [
            'tentuan'=>'required | unique:tuan,tentuan,'.$this->id,
            'nhom_tuan'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'tentuan.required'=>'Trường này không được để trống',
            'tentuan.unique'=>'Tên tuần đã tồn tại',
            'nhom_tuan.required'=>'Trường này không được để trống'

        ];
    }
}
