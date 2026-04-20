<h1> Show Student</h1>

<p><strong>University ID:</strong> {{ $student->university_id }}</p>
<p><strong>Email:</strong> {{ $student->email }}</p>
<p><strong>First Name:</strong> {{ $student->first_name }}</p>
<p><strong>Last Name:</strong> {{ $student->last_name }}</p>
<p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>
<p><strong>Admission Date:</strong> {{ $student->admission_date }}</p>
<p><strong>Status:</strong> {{ $student->status }}</p>

<a href="{{ route('students.index') }}">Back to Students</a>

<form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
    @csrf
    @method('DELETE')

    <button type="submit" style="background:red;color:white;">
        Delete Student
    </button>
</form>