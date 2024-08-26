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
            $table->string('invoice_id');
            $table->foreignId('user_id')->constrained();
            $table->text('address')->nullable();
            $table->double('discount')->default(0);
            $table->double('delivery_charge')->default(0);
            $table->double('subtotal')->nullable();
            $table->string('grandtotal')->nullable();
            $table->integer('product_qty')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('pending');
            $table->timestamp('payment_approve_date')->nullable();
            $table->string('transaction_id')->nullable();
            $table->json('coupon_info')->nullable();
            $table->string('currency_name')->nullable();
            $table->string('order_status')->default('pending');
            $table->text('note')->nullable();
            $table->string('shpping_method')->nullable();
            $table->string('tracking_number')->nullable();
            $table->timestamp('fulfillment_date')->nullable();

            $table->timestamp('delivery_date')->nullable();
            $table->timestamp('shipped_date')->nullable();
            $table->string('delivery_status')->default('pending');
            $table->text('admin_notes')->nullable();
            $table->string('refund_status')->nullable();
            $table->decimal('refund_amount', 10, 2)->nullable();
            $table->integer('loyalty_points')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('shipping_tracking_url')->nullable();

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
