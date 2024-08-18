<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->foreignIdFor(\App\Models\Product::class)->constrained();
            $table->softDeletesTz();
            $table->timestampsTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};
