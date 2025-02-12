<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Product */
class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'name' => $this->name,
            'desc' => $this->desc,
            'SKU' => $this->SKU,

            'productCategory' => new ProductCategoryResource($this->whenLoaded('productCategory')),
            'productInventory' => new ProductInventoryResource($this->whenLoaded('productInventory')),
        ];
    }
}
