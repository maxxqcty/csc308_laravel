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
        
        // 1. New: Foreign key to the standardized Grade Scale
        // We keep this nullable because grades aren't assigned until the term ends
        $table->foreignId('grade_scale_id')->nullable()->constrained('grade_scales')->nullOnDelete();

        // 2. Snapshotting credits (Good job keeping this!)
        $table->unsignedInteger('credits_at_enrollment'); 
        
        // 3. Status tracking
        $table->enum('status', [
            'enrolled', 
            'dropped', 
            'withdrawn', 
            'completed', 
            'failed', 
            'incomplete', // Added: common for students who need more time
            'audit'
        ])->default('enrolled');

        // 4. Manual Overrides (Optional but recommended)
        // Sometimes a professor gives a "Pass" regardless of points
        $table->boolean('is_manual_grade')->default(false);
        $table->text('internal_notes')->nullable(); // For administrative record-keeping
        
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
