<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   // index
public function index()
{
    $animals = Animal::all();
    return view('animals.index', compact('animals'));
}

// create
public function create()
{
    return view('animals.create');
}

// show
public function show($id)
{
    $animal = Animal::findOrFail($id);
    return view('animals.show', compact('animal'));
}

// edit
public function edit($id)
{
    $animal = Animal::findOrFail($id);
    return view('animals.edit', compact('animal'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'species' => 'sometimes|required|string|max:255',
            'age' => 'sometimes|required|integer|min:0',
            'habitat' => 'sometimes|required|string|max:255',
        ]);

        $animal->update($validated);

        return response()->json($animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return response()->json(['message' => 'Animal deleted']);
    }
}