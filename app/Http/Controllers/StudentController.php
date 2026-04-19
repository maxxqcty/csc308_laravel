<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    //
    
    public function index() {

    $students = Student::all();
        return view('students.index', ['students' => $students]);
    }


    public function show(Student $Student) {
        return view('students.show', ['student' => $Student]);
    }


    public function edit(Student $Student) {
        return view('students.edit', ['student' => $Student]);
    }

    public function update(Request $request, Student $Student) {

            $validatedData = $request->validate([
                'university_id' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'admission_date' => 'required|date',
                'status' => 'required|in:active,on_leave,graduated,expelled',
            ]);
        $Student->update($validatedData);

        return redirect()->route('students.show', ['student' => $Student]);
    }

    public function destroy(Student $Student) {
        $Student->delete();
        return redirect()->route('students.index')  
        ->with('success', 'Student deleted successfully.');
    }
}