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
        Schema::create('pickroom', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_type')->constrained('rooms')->onDelete('cascade'); // Relationship with rooms table
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->integer('adults')->unsigned();
            $table->integer('children')->unsigned()->nullable();
            $table->string('promo_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickroom');
    }
};
