<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
</head>
<body>

<h1>Students</h1>

<!-- CREATE BUTTON -->
<a href="{{ route('students.create') }}">
    <button>Create Student</button>
</a>

<br><br>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <!-- SHOW BUTTON -->
                    <a href="{{ route('students.show', $student) }}">
                        <button>Show</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>