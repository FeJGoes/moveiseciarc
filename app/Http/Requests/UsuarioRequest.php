<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
        switch (strtoupper($this->method())) {
            case 'POST':
                return [
                    'name' => 'required|filled|min:3|max:50',
                    'email' => 'required|filled|email|max:50',
                    'password' => 'required|filled|min:8|confirmed',
                    'avatar' => 'sometimes|image|max:20480|dimensions:min_width=200,min_height=200',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'sometimes|filled|min:3|max:50',
                    'email' => 'sometimes|filled|email|max:50',
                    'password' => 'sometimes|filled|min:8|confirmed',
                    'active' => 'sometimes|boolean',
                    'avatar' => 'sometimes|image|max:20480|dimensions:min_width=200,min_height=200',
                ];

        }
    }
}
