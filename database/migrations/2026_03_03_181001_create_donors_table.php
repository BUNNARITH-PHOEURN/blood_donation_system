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
         Schema::create('donors', function (Blueprint $table) {
            $table->id();

            // Link to users table (1 user = 1 donor profile)
            $table->foreignId('user_id')
                ->unique()
                ->constrained()
                ->cascadeOnDelete();

            // Medical basic info
            $table->string('blood_type')->nullable(); 
            $table->date('date_of_birth');
            $table->enum('gender', ['male','female','other']);

            // Profile completion flag
            $table->boolean('is_profile_completed')->default(false);

            // If created by nurse/admin
            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
