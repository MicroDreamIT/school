<?php

//Edu Mis n
namespace App\Http\Requests\Hostel\FoodItem;

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
            'title'             => 'required | max:50 | unique:food_items,title',
            'category'          => 'required',
            'price'             => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please, Add Food Item.',
            'title.unique' => 'This Item Already Register',
        ];
    }
}
