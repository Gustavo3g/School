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
            'name' => 'required|max:255',
            'cpf' => 'required|max:11',
            'birth_date' => 'required|date',
            'gender' => 'required',
//          --------------------------------------
            'responsible_name' => 'required|max:255',
            'responsible_cpf' => 'required|max:11',
            'responsible_birth_date' => 'required|date',
            'responsible_gender' => 'required',
        ];
    }
}
