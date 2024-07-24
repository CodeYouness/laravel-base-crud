<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals= Animal::all();
        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // Metodo piu lungo
        // $newAnimal = new Animal($data);
        // $newAnimal->common_name = $data['common_name'];
        // $newAnimal->scientific_name = $data['scientific_name'];
        // $newAnimal->habitat = $data['habitat'];
        // $newAnimal->class = $data['class'];
        // $newAnimal->family = $data['family'];
        // $newAnimal->average_life = $data['average_life'];
        // $newAnimal->average_weight = $data['average_weight'];
        // $newAnimal->image = $data['image'];
        // $newAnimal->save();

        // Metodo piu corto (fillable)
        $newAnimal = Animal::create($data);

        return redirect()->route('animals.show', $newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}