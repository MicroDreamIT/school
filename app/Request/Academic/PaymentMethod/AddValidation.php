<?php

//Edu Mis n
namespace App\Http\Requests\Academic\PaymentMethod;

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
            'title'       => 'required | max:25 | unique:payment_methods,title',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
