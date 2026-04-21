<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
</head>
<body>

    <h1>Students</h1>

    <!-- CREATE BUTTON -->
    <p>
        <a href="{{ route('students.create') }}">
            <button type="button">Create Student</button>
        </a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr> <th align="left">ID</th>
                <th align="left">Name</th>
                <th align="left">Email</th>
                <th align="center">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->university_id }}</td>
                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td align="center">
                        <a href="{{ route('students.show', $student) }}">
                            <button type="button">Show</button>
                        </a>

                        <a href="{{ route('students.edit', $student) }}">
                            <button type="button">Edit</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>