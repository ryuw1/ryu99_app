<?php

namespace App\Http\Requests\Mastas;

use Illuminate\Foundation\Http\FormRequest;

class CrematoriumRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'display_order' => 'required|integer',
                 'name' => 'required|max:20',
                 'tel' =>  'required|integer',
                ];
    }
    public function messages()
    {
        return [
            'display_order' => '表示順を暫定でも良いので数字で入れてください(1や999など)',
            'name.required' => '施設名を入れてください',
            'tel.required' => '電話番号を入れてください',
        ];
    }
}
