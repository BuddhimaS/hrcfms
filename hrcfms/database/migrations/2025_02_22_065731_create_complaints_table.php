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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest_id'); // Foreign key to the guests table
            $table->enum('complain_type', ['Service', 'Cleanliness', 'Maintenance', 'Staff Behavior', 'Others']);
            $table->dateTime('incident_date_time');
            $table->string('attachments')->nullable();
            $table->boolean('feedback_agreement')->default(false);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('guest_id')->references('id')->on('guests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
