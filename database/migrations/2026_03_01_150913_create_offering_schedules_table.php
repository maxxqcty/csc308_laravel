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
        Schema::create('offering_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_offering_id')->constrained()->cascadeOnDelete();
            $table->foreignId('time_slot_id')->constrained()->restrictOnDelete();
            $table->foreignId('room_id')->constrained()->restrictOnDelete();
            $table->foreignId('instructor_id')->constrained()->restrictOnDelete();

            // The Logic Guard: 
            // No room can be used twice at the same time
            $table->unique(['time_slot_id', 'room_id'], 'uq_room_time');
            // No instructor can be in two rooms at the same time
            $table->unique(['time_slot_id', 'instructor_id'], 'uq_instructor_time');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offering_schedules');
    }
};
