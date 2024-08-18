<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'SKU',
        'product_category_id',
        'product_inventory_id',
    ];

    protected function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    protected function productInventory(): BelongsTo
    {
        return $this->belongsTo(ProductInventory::class);
    }

    protected function productPrice(): HasOne
    {
        return $this->hasOne(ProductPrice::class);
    }
}
