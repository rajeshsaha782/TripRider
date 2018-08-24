<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPackageRequest extends FormRequest
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
            'Name' => 'required',
            'From' => 'required',
            'To' => 'required',
            'Triplength' => 'required|numeric',
            'Trip_Type' => 'required',
            'Description' => 'required',
            'TotalSits' => 'required|numeric',
            'TotalCost' => 'required|numeric'
            
        ];
    }
}
