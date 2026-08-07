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
        Schema::create('emissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->date('date');
            $table->string('type'); // ex: Combustível, Eletricidade, Transporte, etc.
            $table->decimal('quantity', 12, 4); // toneladas ou kg de CO₂e
            $table->string('unit')->default('tCO2e');
            $table->string('source')->nullable();
            $table->string('notes')->nullable();
            $table->string('status')->default('draft'); // draft, validated
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emissions');
    }
};
