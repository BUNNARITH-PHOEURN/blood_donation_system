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
        Schema::create('donores_screenings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('donor_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->date('screening_date');
            $table->decimal('weight', 5, 2)->nullable();
            $table->string('blood_pressure')->nullable();
            $table->decimal('hemoglobin_level', 5, 2)->nullable();
            $table->enum('eligibility_status', ['eligible','not_eligible']);
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donores_screenings');
    }
};
