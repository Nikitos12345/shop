<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\OrderDetail */
class OrderDetailResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'amount' => $this->amount,
            'price' => $this->price,

            'productDiscount' => new ProductDiscountResource($this->whenLoaded('productDiscount')),
        ];
    }
}
