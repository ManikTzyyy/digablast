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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('description');
            $table->json('benefits')->default('[]');
            $table->integer('price')->default(0);
            $table->boolean('is_active')->default(true);
            $table->integer('duration_days')->default(0);
            $table->integer('user_acquisition_limit')->default(0);
            $table->json('features')->default('{}');
            $table->boolean('is_best_offer')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
