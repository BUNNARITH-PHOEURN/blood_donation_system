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
        Schema::create('blood_bags', function (Blueprint $table) {
            $table->id();

            $table->foreignId('donation_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('bag_code')->unique();
            $table->string('blood_type');
            $table->date('expiration_date');

            $table->enum('status', [
                'testing',
                'available',
                'used',
                'discarded'
            ])->default('testing');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_bags');
    }
};
