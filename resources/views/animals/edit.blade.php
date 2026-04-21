@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Animal</h1>

    <form action="{{ route('animals.update', $animal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $animal->name }}"><br>

        <label>Species:</label>
        <input type="text" name="species" value="{{ $animal->species }}"><br>

        <label>Age:</label>
        <input type="number" name="age" value="{{ $animal->age }}"><br>

        <label>Habitat:</label>
        <input type="text" name="habitat" value="{{ $animal->habitat }}"><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection