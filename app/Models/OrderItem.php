<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
    ];

    protected function orderDetail(): BelongsTo
    {
        return $this->belongsTo(OrderDetail::class);
    }

    protected function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
