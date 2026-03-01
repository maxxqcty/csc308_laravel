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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->foreignId('course_offering_id')->constrained()->cascadeOnDelete();
            
            // Snapshotting credits ensures GPA stays accurate if course credit values change later
            $table->unsignedInteger('credits_at_enrollment'); 
            
            $table->enum('status', ['enrolled', 'dropped', 'withdrawn', 'completed', 'failed', 'audit']);
            $table->string('final_grade', 3)->nullable(); // e.g., 'A-', 'B+'
            $table->decimal('grade_points', 4, 2)->nullable(); // e.g., 3.70
            
            $table->unique(['student_id', 'course_offering_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
