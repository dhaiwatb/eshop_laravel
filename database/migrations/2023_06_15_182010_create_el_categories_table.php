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
        Schema::create('el_categories', function (Blueprint $table) {
            $table->id();
            $table->text('category_name')->nullable();
            $table->text('category_details')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('el_categories');
    }
};
