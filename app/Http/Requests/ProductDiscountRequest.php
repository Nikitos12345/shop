<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDiscountRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'discount' => ['required', 'numeric'],
            'discount_type' => ['required'],
            'active' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
