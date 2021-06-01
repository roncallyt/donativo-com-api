<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:40'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('validation.required'),
            'name.max' => __('validation.max.string')
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw (new ValidationException($validator, response()->json([
            'errors' => $validator->errors()
        ], Response::HTTP_BAD_REQUEST)));
    }
}
