<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlowerRequest extends FormRequest
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
            'name' => 'required|alpha|max:30',
            'price' => 'required|numeric|between:2,100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required.',
            'name.max' => 'Name should be max 30char.',
            'price.required' => 'A price is required !'
        ];
    }
}
