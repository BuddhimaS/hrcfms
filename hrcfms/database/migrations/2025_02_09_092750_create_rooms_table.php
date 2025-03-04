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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->unique(); // Room Number
            $table->string('room_type'); // Room Type (Single, Double, Suite)
            $table->string('bed_type'); // Bed Type (King, Queen, Twin)
            $table->decimal('price_per_night', 8, 2); // Price Per Night
            $table->text('room_description')->nullable(); // Room Description
            $table->enum('status', ['available', 'booked', 'maintenance'])->default('available'); // Status Availability
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
