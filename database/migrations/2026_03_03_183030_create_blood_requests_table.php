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
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('hospital_id')
                ->constrained()
                ->cascadeOnDelete();
            
            $table->foreignId('requested_by')
                  ->constrained('users')
                  ->cascadeOnDelete();
            
            $table->foreignId('approved_by')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            $table->string('blood_type');
            $table->integer('units_needed');

            $table->enum('urgency', [
                'normal',
                'urgent',
                'emergency'
            ])->default('normal');

            $table->enum('status', [
                'pending',
                'approved',
                'completed',
                'rejected'
            ])->default('pending');

            $table->date('request_date');
            $table->date('approved_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_requests');
    }
};
