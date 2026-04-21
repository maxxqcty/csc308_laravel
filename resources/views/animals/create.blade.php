@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Animal</h1>

    <form action="{{ route('animals.store') }}" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name"><br>

        <label>Species:</label>
        <input type="text" name="species"><br>

        <label>Age:</label>
        <input type="number" name="age"><br>

        <label>Habitat:</label>
        <input type="text" name="habitat"><br>

        <button type="submit">Save</button>
    </form>
</div>
@endsection