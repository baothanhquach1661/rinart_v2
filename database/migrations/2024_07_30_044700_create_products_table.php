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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->default(0);

            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('thumb_image')->nullable();
            $table->integer('qty')->nullable();
            $table->string('stock')->nullable();
            $table->string('origin')->nullable();
            $table->text('barcode')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('size')->nullable();
            $table->text('additional_metafield1')->nullable();
            $table->text('additional_metafield2')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('video_link')->nullable();
            $table->string('sku')->nullable();
            $table->double('price')->nullable();
            $table->double('discount_price')->nullable();
            $table->date('offer_start_date')->nullable();
            $table->date('offer_end_date')->nullable();

            $table->boolean('is_best_deal')->nullable();
            $table->boolean('is_best_seller')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->boolean('is_event')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('is_approved')->default(0);

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();

            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->string('extra3')->nullable();
            $table->string('extra4')->nullable();
            $table->string('extra5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
