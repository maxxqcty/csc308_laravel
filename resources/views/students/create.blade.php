<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Student</title>
</head>
<body>

    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <p>
            <label for="university_id">University ID:</label><br>
            <input type="text" id="university_id" name="university_id" required>
        </p>

        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name" required>
        </p>

        <p>
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" required>
        </p>

        <p>
            <label for="date_of_birth">Date of Birth:</label><br>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
        </p>

        <p>
            <label for="admission_date">Admission Date:</label><br>
            <input type="date" id="admission_date" name="admission_date" required>
        </p>

        <p>
            <label for="status">Status:</label><br>
            <select id="status" name="status" required>
                <option value="active">Active</option>
                <option value="on_leave">On Leave</option>
                <option value="graduated">Graduated</option>
                <option value="expelled">Expelled</option>
            </select>
        </p>

        <p>
            <button type="submit">Create Student</button>
        </p>

    </form>

</body>
</html>