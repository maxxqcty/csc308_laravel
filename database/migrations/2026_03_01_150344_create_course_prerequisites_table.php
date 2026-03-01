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
        Schema::create('course_prerequisites', function (Blueprint $table) {
            $table->id(); // Added an ID for easier management/indexing
    
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('prerequisite_id')->constrained('courses')->cascadeOnDelete();
            
            // 1. Minimum Grade Requirement
            $table->decimal('min_grade_point', 3, 2)->default(2.00); 
            
            // 2. The Logic "Group" (The Secret Sauce)
            // If two rows have the same 'course_id' and the same 'group_identifier',
            // it means (Course A AND Course B) are required.
            // If they have DIFFERENT identifiers, it means (Course A OR Course B) is required.
            $table->unsignedTinyInteger('group_identifier')->default(1); 
            
            // 3. Timing Logic
            // If true, the student can take the prerequisite in the SAME semester (Corequisite).
            // If false, they MUST have completed it in a previous semester.
            $table->boolean('is_concurrent_allowed')->default(false);

            // Primary key change: Since we added an ID and might have complex groups, 
            // a unique constraint on the pair is safer than a composite primary key.
            $table->unique(['course_id', 'prerequisite_id'], 'unique_pre_req');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_prerequisites');
    }
};
