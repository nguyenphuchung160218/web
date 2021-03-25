<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestClass extends FormRequest
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
            'ten'=>'required | unique:lop,ten,'.$this->id,
            'tengiaovien' => 'required',
            'siso'=>'required',
            'khoi'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'ten.required'=>'Trường này không được để trống',
            'ten.unique'=>'Tên lớp  đã tồn tại',
            'tengiaovien.required'=>'Trường này không được để trống',
            'siso.required'=>'Trường này không được để trống',
            'khoi.required'=>'Trường này không được để trống',

        ];
    }
}
