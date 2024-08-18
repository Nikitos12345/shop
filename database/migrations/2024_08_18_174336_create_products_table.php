<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->string('SKU');
            $table->foreignIdFor(\App\Models\ProductCategory::class)->constrained();
            $table->foreignIdFor(\App\Models\ProductInventory::class)->constrained();
            $table->foreignIdFor(\App\Models\ProductDiscount::class)->constrained();
            $table->softDeletesTz();
            $table->timestampsTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
