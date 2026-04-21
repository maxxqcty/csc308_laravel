@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Animal Details</h1>

    <p><strong>Name:</strong> {{ $animal->name }}</p>
    <p><strong>Species:</strong> {{ $animal->species }}</p>
    <p><strong>Age:</strong> {{ $animal->age }}</p>
    <p><strong>Habitat:</strong> {{ $animal->habitat }}</p>

    <a href="{{ route('animals.index') }}">Back</a>
</div>
@endsection