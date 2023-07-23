<?php

namespace App\Http\Requests\Mastas;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'display_order' => 'required|integer',
            'group_by_product_code'  => 'required|integer',
            'code' => 'required',
            'name' => 'required',
            'unit_price' => 'required|integer',
            'tax_rate' => 'required',
            'quantity' => 'required|integer',
            'unit_orice_including_tax' => 'required|integger',
            'unit' => 'required',
            'other' => 'required',
            /*
            'fish_name' => 'required',
            'year' => 'required|integer|between:1990,2018',
            'month' => 'required|integer|between:1,12',
            'day' => 'required|integer|between:1,31',
            'prefecture' => 'required',
            'place' => 'required'
            */
        ];
    }
    public function messages()
    {
        return [
            'display_order' => '表示順を暫定でも良いので数字で入れてください(1や999など)', 
            'name' => '名称を入力してください',
            'unit_price' => '単価を入力してください',
            'tax_rate' => '税率を入力してください',
            'quantity' => '数量を入力してください',
        ];
    }
}
