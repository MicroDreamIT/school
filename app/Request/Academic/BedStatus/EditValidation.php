<?php

//Edu Mis n
namespace App\Http\Requests\Academic\BedStatus;

use Illuminate\Foundation\Http\FormRequest;

class EditValidation extends FormRequest
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
            'title' => 'required | max:25 | unique:bed_statuses,title,'.$this->request->get('id'),
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'The status already exist. Please, edit or create new.',
        ];
    }
}
