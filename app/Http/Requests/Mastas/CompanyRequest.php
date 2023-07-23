<?php

namespace App\Http\Requests\Mastas;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
                 'name' => 'required|max:20',
                 'adress1'  => 'required',
                 'tel' => 'required',
                 'fax'  => 'required',
                 'bank_name'  => 'required',
                 'bank_account'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '会社名を入れてください',
            'adress1.required' => '住所を入れてください',
            'tel.required' => '電話番号を入れてください',
            'fax.required' => 'FAX番号を入れてください',
            'nank_name.required' => '銀行名を入れてください',
            'bank_account' => '銀行口座情報を入れてください',
        ];
    }
}
