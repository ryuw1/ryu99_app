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
            'name' => 'required',
            'adress1' => 'required',
            'tel' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前を入れてください',
            'tel' => '電話番号を正しく入れてください',
        ];
    }
}
