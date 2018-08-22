<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupDriverRequest extends FormRequest
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
            'Name'=> 'required',
            'Email' => 'required|email|unique:users,email',
            'PhoneNumber' => 'required',
            'CarNumber' => 'required',
            'Password' => 'required_with:ConfirmPassword|same:ConfirmPassword',
            'ConfirmPassword'=> 'required'
        ];
    }
}
