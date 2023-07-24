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
    public function rules(): array
    {
        return [
            'group_by_product_code'  => 'required|integer',
            'code' => 'required',
            'name' => 'required',
            'unit_price' => 'required|integer',
            'tax_rate' => 'required',
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
            'group_by_product_code'  => '商品分類を数字で入力してください',
            'name' => '名称を入力してください',
            'unit_price' => '単価を入力してください「なし」とする場合は0を入れてください',
            'tax_rate' => '税率を入力してください',
        ];
    }
}
