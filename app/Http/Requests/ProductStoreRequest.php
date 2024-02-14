<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'discountPercentage' => 'nullable|numeric|min:0|max:100',
            'rating' => 'nullable|numeric|min:0|max:10',
            'stock' => 'nullable|integer',
            'brand' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'thumbnail' => 'required',
            'images' => 'nullable|array',
        ];
    }
}
