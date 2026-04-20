<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div>
        <label>University ID:</label><br>
        <input type="text" name="university_id" required>
    </div>
    <br>

    <div>
        <label>Email:</label><br>
        <input type="email" name="email" required>
    </div>
    <br>

    <div>
        <label>First Name:</label><br>
        <input type="text" name="first_name" required>
    </div>
    <br>

    <div>
        <label>Last Name:</label><br>
        <input type="text" name="last_name" required>
    </div>
    <br>

    <div>
        <label>Date of Birth:</label><br>
        <input type="date" name="date_of_birth" required>
    </div>
    <br>

    <div>
        <label>Admission Date:</label><br>
        <input type="date" name="admission_date" required>
    </div>
    <br>

    <div>
        <label>Status:</label><br>
        <select name="status" required>
            <option value="active">Active</option>
            <option value="on_leave">On Leave</option>
            <option value="graduated">Graduated</option>
            <option value="expelled">Expelled</option>
        </select>
    </div>
    <br>

    <button type="submit">Create Student</button>
</form>