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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relationship with users table
            $table->string('Fname')->nullable(); // Additional fields for job seekers
            $table->string('Lname')->nullable();
            $table->string('Email')->nullable();
            $table->string('City')->nullable(); // Additional fields for job seekers
            $table->string('State')->nullable();
            $table->string('PinCode')->nullable();
            $table->date('DOB')->nullable(); // Date of birth
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade'); // Relationship with users table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
