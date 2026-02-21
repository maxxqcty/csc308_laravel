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
        Schema::create('subject_enrolled', function (Blueprint $table) {
          $table->id();

            $table->foreignId('student_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('subject_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('semester'); // e.g., 1st Semester
            $table->year('academic_year'); // e.g., 2025
            $table->string('grade')->nullable();

            $table->timestamps();

            $table->unique(
    ['student_id', 'subject_id', 'semester', 'academic_year'],
    'subj_enroll_unique'
);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_enrolled');
    }
};
