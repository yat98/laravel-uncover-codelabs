<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'nim' => 'required|size:8',
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'gender' => 'required|in:M,F',
            'major' => 'required',
            'address' => '',
        ];
    }
}
