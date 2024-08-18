<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('discount');
            $table->string('discount_type');
            $table->boolean('active');
            $table->softDeletesTz();
            $table->timestampsTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_discounts');
    }
};
