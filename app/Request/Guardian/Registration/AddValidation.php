<?php

namespace App\Http\Requests\Guardian\Registration;

use Illuminate\Foundation\Http\FormRequest;

class AddValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'guardian_first_name' => 'required | max:15',
            'guardian_middle_name' => 'max:15',
            'guardian_last_name' => 'required | max:15',
            'guardian_eligibility' => 'max:50',
            'guardian_occupation' => 'max:50',
            'guardian_office' => 'max:100',
            'guardian_office_number' => 'max:15',
            'guardian_residence_number' => 'max:15',
            'guardian_email' => 'max:100',
            'guardian_mobile_1' => 'required|unique:guardian_details,guardian_mobile_1',
            'guardian_mobile_2' => 'max:15',
            'guardian_relation' => 'required|max:50',
            'guardian_address' => 'required|max:100',

            'guardian_main_image' => 'mimes:jpeg,bmp,png',

        ];

    }

    public function messages()
    {
        return [

        ];
    }
}
