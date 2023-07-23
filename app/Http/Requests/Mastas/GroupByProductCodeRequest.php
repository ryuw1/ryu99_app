<?php

namespace App\Http\Requests\Mastas;

use Illuminate\Foundation\Http\FormRequest;

class GroupByProductCodeRequest extends FormRequest
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
                'display_order',
               // 'group_by_product_code',		
                 'name' => 'required|max:20',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '商品グループの名称を入れてください',
        ];
    }
}
