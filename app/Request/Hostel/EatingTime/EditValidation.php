<?php

//Edu Mis n
namespace App\Http\Requests\Hostel\EatingTime;

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
             'title' => 'required | max:25 | unique:eating_times,title,'.$this->request->get('id'),
             'time'  => 'required'
         ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'This Label Already Register',
        ];
    }
}
