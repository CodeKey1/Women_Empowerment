<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
            //
            "name" => 'required|max:255',
            "type" => 'required|max:255',
            "date" => 'required',
            "file" => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name' => ' الحقل مطلوب ',
            'name.max' => '  اقصي حد للحروف 255 ',
            'type' => ' الحقل مطلوب ',
            'type.max' => '  اقصي حد للحروف 500 ',
            'date' => ' الحقل مطلوب ',
            'file' => ' الحقل مطلوب ',
        ];
    }
}
