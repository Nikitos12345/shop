<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDiscount extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'discount',
        'discount_type',
        'active',
    ];
}
