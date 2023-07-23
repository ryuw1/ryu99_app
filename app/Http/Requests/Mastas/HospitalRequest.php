<?php

namespace App\Http\Requests\Mastas;

use Illuminate\Foundation\Http\FormRequest;

class HospitalRequest extends FormRequest
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
        [
            'display_order' => 'required|integer',
            'area_name' => 'required',	
            'name_kana'	=> 'required',
            'name' => 'required',	
           // 'postal_code' => 'required',	
            'adress1' => 'required',	
           // 'adress2' => 'required',	
            'tel' => 'required',	
            'fax' => 'required',	
        ];
    }
    public function messages()
    {
        return [
            'display_order' => '表示順を暫定でも良いので数字で入れてください(1や999など)', 
            'name_kana.required' => '読みがなを入れてください',
            'name.required' => '名称を入れてください',	
            'adress1' => '住所を入れてください',	
            'tel' => '電話番号を正しく入れてください',
        ];
    }
}
