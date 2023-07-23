<?php

namespace App\Http\Requests\Mastas;

use Illuminate\Foundation\Http\FormRequest;

class HallRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //'display_order' => 'required|integer',
            'name' => 'required',
            'postal_code' => 'required',
            'adress1' => 'required',
            'adress2' => 'required',
            'tel' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name_kana' => '読みがなを入れてください',
            'name.required' => '名前を入れてください',
            'tel' => '電話番号を正しく入れてください',
            'mobile_phone' => '携帯電話番号を入れてください',
            'inputter' => '入力担当者かどうかを入れてください',
        ];
    }
}
