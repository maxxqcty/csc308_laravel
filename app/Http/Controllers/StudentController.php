<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of students
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', [
            'students' => $students
        ]);
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store new student
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'university_id' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'admission_date' => 'required|date',
            'status' => 'required|in:active,on_leave,graduated,expelled',
        ]);

        $student = Student::create($validatedData);

        return redirect()->route('students.index', $student);
    }

    /**
     * Show single student
     */
    public function show(Student $student)
    {
        return view('students.show', [
            'student' => $student
        ]);
    }

    /**
     * Show edit form
     */
    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update student
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'university_id' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'admission_date' => 'required|date',
            'status' => 'required|in:active,on_leave,graduated,expelled',
        ]);

        $student->update($validatedData);

        return redirect()->route('students.index');
    }

    /**
     * Delete student
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }
}