<?php

namespace Database\Factories;

use App\Models\ProductDiscount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductDiscountFactory extends Factory
{
    protected $model = ProductDiscount::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'discount' => $this->faker->randomFloat(),
            'discount_type' => $this->faker->word(),
            'active' => $this->faker->boolean(),
        ];
    }
}
