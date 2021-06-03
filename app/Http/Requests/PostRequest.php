<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'categoria_id' => 'sometimes|required',
            'title' => 'required|max:255',
            'image' => 'sometimes|required|file|mimes:jpeg,jpg,png,svg|max:8192',
            'status' => 'sometimes|required',
            'description' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'categoria_id.required' => __('validation.required'),
            'title.required' => __('validation.required'),
            'title.max' => __('validation.max.string'),
            'image.required' => __('validation.required'),
            'image.file' => __('validation.file'),
            'image.mimes' => __('validation.mimes'),
            'image.max' => __('validation.max.file'),
            'status.required' => __('validation.required'),
            'description.required' => __('validation.required'),
            'description.string' => __('validation.string'),
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw (new ValidationException($validator, response()->json([
            'errors' => $validator->errors()
        ], Response::HTTP_BAD_REQUEST)));
    }
}
