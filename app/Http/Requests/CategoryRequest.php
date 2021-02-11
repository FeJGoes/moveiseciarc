<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                    'abbrev' => 'required|filled|min:3|max:10',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'sometimes|filled|min:3|max:50',
                    'abbrev' => 'sometimes|filled|min:3|max:10',
                ];
        }
    }
}
