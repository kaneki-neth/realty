<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            "first_name" => [
                'required',
                'max:1oo'
            ],

            "middle_name" => [
                'nullable',
                'max:100'
            ],

            "last_name" => [
                'required',
                'max:100'
            ],

            "birthdate" => [
                'required',
                'date'
            ],

            "sex" => [
                'required',
                Rule::in(['M','F'])
            ],

            "barangay" => [
                'required',
                'max:100'
            ],

            "city" => [
                'required',
                'max:100'
            ],

            "province" => [
                'required',
                'max:100'
            ],

            "email" => [
                'required',
                Rule::unique('roles')->ignore($this->user)->whereNull('deleted_at'),
                'min:5',
                'max:100'
            ],

            "password" => [
                'required',
                'min:5'
            ]
        ];
    }
}
