<?php

//Edu Mis n
namespace App\Http\Requests\Academic\Day;

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
            'title'       => 'required | max:10 | unique:days,title',
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'The day already exist. Please, edit or create new.',
        ];
    }
}
