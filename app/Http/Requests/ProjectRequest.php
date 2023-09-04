<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "details" => 'required|max:500',
            "image" => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name' => ' الحقل مطلوب ',
            'name.max' => '  اقصي حد للحروف 255 ',
            'details' => ' الحقل مطلوب ',
            'details.max' => '  اقصي حد للحروف 500 ',
            'image' => ' الحقل مطلوب ',
        ];
    }
}
