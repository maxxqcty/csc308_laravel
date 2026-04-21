<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Student</title>
</head>
<body>

    <h1>Show Student</h1>

    <p><strong>University ID:</strong> {{ $student->university_id }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>First Name:</strong> {{ $student->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $student->last_name }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>
    <p><strong>Admission Date:</strong> {{ $student->admission_date }}</p>
    <p><strong>Status:</strong> {{ $student->status }}</p>

    <p>
        <a href="{{ route('students.index') }}">
            <button type="button">Back to Students</button>
        </a>
    </p>

    <form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
        @csrf
        @method('DELETE')

        <p>
            <button type="submit">Delete Student</button>
        </p>
    </form>

</body>
</html>