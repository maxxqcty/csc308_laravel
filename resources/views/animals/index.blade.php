@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Animals</h1>

    <a href="{{ route('animals.create') }}" class="btn btn-primary">Add Animal</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Species</th>
                <th>Age</th>
                <th>Habitat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->species }}</td>
                    <td>{{ $animal->age }}</td>
                    <td>{{ $animal->habitat }}</td>
                    <td>
                        <a href="{{ route('animals.show', $animal->id) }}">View</a>
                        <a href="{{ route('animals.edit', $animal->id) }}">Edit</a>

                        <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection