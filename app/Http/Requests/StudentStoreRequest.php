<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'name' => 'required|unique:students',
            //'code' => 'required|unique:departments',
            //'register_no' => 'required|regex:/^([0-9]{4})([-])([A-Z]{2})([-])([0-9]{2})$/',
        ];
    }
}
