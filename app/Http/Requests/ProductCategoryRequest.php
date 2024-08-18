<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'desc' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
