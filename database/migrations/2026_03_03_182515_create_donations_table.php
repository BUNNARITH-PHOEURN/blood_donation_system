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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('donor_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('hospital_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('screening_id')
                ->nullable()
                ->constrained('donor_screenings')
                ->nullOnDelete();

            $table->date('donation_date');

            $table->enum('status', [
                'scheduled',
                'completed',
                'cancelled'
            ])->default('scheduled');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
