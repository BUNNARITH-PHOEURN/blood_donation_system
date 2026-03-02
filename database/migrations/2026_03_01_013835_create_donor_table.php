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
            $table->increments('donor_id');
            $table->foreignID('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->enum('gender', ['M', 'F']);
            $table->date('DOB');
            $table->double('weight');
            $table->string('phone');
            $table->date('last_donation');
        });




        Schema::create('blood_stock', function (Blueprint $table) {
            $table->increments('stock_id');
            $table->integer('donor_id');
            $table->integer('qty');
            $table->date('expiry_date');
        });


        Schema::create('test_reports', function (Blueprint $table) {
            $table->increments('test_id');
            $table->integer('donor_id');
            $table->date('test_date');
            $table->string('result');
        });


        Schema::create('blood_request', function (Blueprint $table) {
                $table->increments('request_id');
                $table->integer('hospital_id');
                $table->integer('user_id');
                $table->integer('qty');
                $table->enum('status', ['Pending', 'Processing', 'Success', 'Cancelled']);
        });


        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('hospital_id');
            $table->string('name');
            $table->string('location');
            $table->string('contact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donor');
    }
};
