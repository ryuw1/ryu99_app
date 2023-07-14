<?php

namespace App\Http\Requests\Mastas;
use Illuminate\Foundation\Http\FormRequest;

class TempleRequest extends FormRequest
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
            //'id' => 'required|integger',
            //'temple_code' => 'required',
            'display_order' => 'required|integer',
            'name_kana' => 'required',
            'name' => 'required',
            'religion_group' => 'required',
            'tel' => 'required|integer|max:12',
            //'fax' => 'required|integer|max:12'
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
            'display_order' => '暫定でも良いので数字で入れてください', 
            'name_kana.required' => '読みがなを入れてください',
            'name.required' => '名称を入れてください',
            'religion_group.required' => '宗旨を入れてください',
            'tel' => '電話番号を正しく入れてください'
        ];
    }
}
