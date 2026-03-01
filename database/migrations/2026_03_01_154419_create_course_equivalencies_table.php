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
        Schema::create('course_equivalencies', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('equivalent_course_id')->constrained('courses')->cascadeOnDelete();
            $table->primary(['course_id', 'equivalent_course_id']);
            
            // Notes why they are equivalent (e.g., "Curriculum update 2026")
            $table->string('reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_equivalencies');
    }
};
