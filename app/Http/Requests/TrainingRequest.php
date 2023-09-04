<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
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
            'name' => 'required|max:255',
            'details' => 'required|max:500',
            'date' => 'required',
            'cat' => 'required',
            'cat' => 'required|max:255',
            'image' => 'required',
            'pre_req' => 'required',
            'description' => 'required',
            'for_whom' => 'required',
            'location' => 'required',
            'presentation' => 'required',
            'video' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name' => ' الحقل مطلوب ',
            'name.max' => '  اقصي حد للحروف 255 ',
            'details' => ' الحقل مطلوب ',
            'details.max' => '  اقصي حد للحروف 500 ',
            'date' => ' الحقل مطلوب ',
            'cat' => ' الحقل مطلوب ',
            'cat.max' => '  اقصي حد للحروف 255  ',
            'image' => ' الحقل مطلوب ',
            'pre_req' => ' الحقل مطلوب ',
            'description' => ' الحقل مطلوب ',
            'for_whom' => ' الحقل مطلوب ',
            'location' => ' الحقل مطلوب ',
            'presentation' => ' الحقل مطلوب ',
            'video' => ' الحقل مطلوب ',

        ];
    }
}
