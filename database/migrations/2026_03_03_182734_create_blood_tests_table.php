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
        Schema::create('blood_tests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('blood_bag_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->enum('hiv_result', ['positive','negative']);
            $table->enum('hepatitis_b_result', ['positive','negative']);
            $table->enum('hepatitis_c_result', ['positive','negative']);
            $table->enum('syphilis_result', ['positive','negative']);
            $table->enum('malaria_result', ['positive','negative']);

            $table->enum('overall_status', [
                'pending',
                'passed',
                'failed'
            ])->default('pending');

            $table->foreignId('tested_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->date('tested_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_tests');
    }
};
