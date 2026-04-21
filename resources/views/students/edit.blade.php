<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="university_id">University ID:</label><br>
            <input 
                type="text" 
                id="university_id"
                name="university_id" 
                value="{{ old('university_id', $student->university_id) }}"
                required
            >
        </p>

        <p>
            <label for="email">Email:</label><br>
            <input 
                type="email" 
                id="email"
                name="email" 
                value="{{ old('email', $student->email) }}"
                required
            >
        </p>

        <p>
            <label for="first_name">First Name:</label><br>
            <input 
                type="text" 
                id="first_name"
                name="first_name" 
                value="{{ old('first_name', $student->first_name) }}"
                required
            >
        </p>

        <p>
            <label for="last_name">Last Name:</label><br>
            <input 
                type="text" 
                id="last_name"
                name="last_name" 
                value="{{ old('last_name', $student->last_name) }}"
                required
            >
        </p>

        <p>
            <label for="date_of_birth">Date of Birth:</label><br>
            <input 
                type="date" 
                id="date_of_birth"
                name="date_of_birth" 
                value="{{ old('date_of_birth', $student->date_of_birth ? $student->date_of_birth->format('Y-m-d') : '') }}"
                required
            >
        </p>

        <p>
            <label for="admission_date">Admission Date:</label><br>
            <input 
                type="date" 
                id="admission_date"
                name="admission_date" 
                value="{{ old('admission_date', $student->admission_date ? $student->admission_date->format('Y-m-d') : '') }}"
                required
            >
        </p>

        <p>
            <label for="status">Status:</label><br>
            <select id="status" name="status" required>
                <option value="active" {{ $student->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="on_leave" {{ $student->status == 'on_leave' ? 'selected' : '' }}>On Leave</option>
                <option value="graduated" {{ $student->status == 'graduated' ? 'selected' : '' }}>Graduated</option>
                <option value="expelled" {{ $student->status == 'expelled' ? 'selected' : '' }}>Expelled</option>
            </select>
        </p>

        <p>
            <button type="submit">Update Student</button>
        </p>

    </form>

</body>
</html>