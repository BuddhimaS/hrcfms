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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('room_number'); // Reference to Room Number
            $table->enum('task_type', ['Cleaning', 'Maintenance', 'Restocking']); // Task Type
            $table->enum('priority', ['Low', 'Medium', 'High'])->default('Medium'); // Priority Level
            $table->text('description')->nullable(); // Task Description
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending'); // Task Status
            $table->timestamps();

            // Foreign key constraint (assuming room_number exists in rooms table)
            $table->foreign('room_number')->references('room_number')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
