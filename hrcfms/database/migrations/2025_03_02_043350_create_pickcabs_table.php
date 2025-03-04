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
        Schema::create('pickcabs', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_id')->unique();
            $table->date('pickup_date');
            $table->string('pickup_time');
            $table->string('vehicle_type');
            $table->string('drop_destination');
            $table->integer('distance')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickcabs');
    }
};
