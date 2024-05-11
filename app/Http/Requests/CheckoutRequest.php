<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
        $emailValidation = auth()->user() ? 'required|email' : 'required|email|unique:users';

        return [
            'email' => $emailValidation,
            'fname' => 'bail|required',
            'lname' => 'bail|required',
            'address_line1' => 'bail|required',
            'city' => 'bail|required',
            'state' => 'bail|required',
            'zip' => 'bail|required',
            'phone' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'You already have an account with this email address. Please <a href="/login">login</a> to continue.',
        ];
    }
}
