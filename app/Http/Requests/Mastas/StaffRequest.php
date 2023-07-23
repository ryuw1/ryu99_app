<?php

namespace App\Http\Requests\Mastas;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'display_order' => 'required|integer',
            'name_kana' => 'required',
            'name' => 'required',
            'tel' => 'required',
            'mobile_phone' => 'required',
            'inputter' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'display_order' => '表示順を暫定でも良いので数字で入れてください(1や999など)', 
            'name_kana.required' => '読みがなを入れてください',
            'name.required' => '名前を入れてください',
            'tel' => '電話番号を正しく入れてください',
            'mobile_phone' => '携帯電話番号を入れてください',
            'inputter' => '入力担当者かどうかを入れてください',
        ];
    }
}
