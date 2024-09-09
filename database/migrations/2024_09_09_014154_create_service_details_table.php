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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('main_image')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('index')->nullable();
            $table->text('description')->nullable();
            $table->text('image_1')->nullable();
            $table->text('image_2')->nullable();
            $table->boolean('status')->default(1);
            $table->string('title_1')->nullable();
            $table->string('description_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('description_2')->nullable();
            $table->string('title_3')->nullable();
            $table->string('description_3')->nullable();

            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->string('extra3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
