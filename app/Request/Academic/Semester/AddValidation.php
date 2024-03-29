<?php

//Edu Mis n
namespace App\Http\Requests\Academic\Semester;

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
            'semester' => 'required | max:50 | unique:semesters,semester',
        ];
    }

    public function messages()
    {
        return [
            'semester.required' => 'Please, Add Semester.',
        ];
    }
}
