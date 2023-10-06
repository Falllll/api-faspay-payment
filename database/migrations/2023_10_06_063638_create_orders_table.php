<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('customer_delivery_name');
            $table->string('customer_delivery_address');
            $table->string('customer_delivery_phone');
            $table->integer('delivery_fee')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('price')->default(0);
            $table->integer('subtotal')->default(0);
            $table->string('status');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
