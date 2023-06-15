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
        Schema::create('el_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->default(1);
            $table->text('product_name')->nullable();
            $table->text('product_details')->nullable();
            $table->text('image')->nullable();
            $table->unsignedDecimal('product_price', 8, 2)->default(0.00);
            $table->unsignedTinyInteger('status')->default(1)->comment('1 enable, 0 disable');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('el_products');
    }
};
