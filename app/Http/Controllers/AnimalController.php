<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalRequest;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $validationRules = [
        'common_name' => 'required|unique:animals|max:100|min:3',
        'scientific_name' => 'required|unique:animals|max:100|min:3',
        'habitat' => 'required|max:100|min:3',
        'class' => 'required|max:100|min:3',
        'family' => 'required|max:100|min:3',
        'average_life' => 'required|integer|min:1|max:127',
        'average_weight' => 'required|integer|min:1|max:32767',
        'image' => 'required|url',
    ];
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
    public function store(StoreAnimalRequest $request)
    {
        $data = $request->validate();

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

        return redirect()->route('animals.show', $newAnimal)->with('created-message', $newAnimal->common_name . " has been added succesfully");
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
        $data = $request->all();
        $animal->update($data);
        return redirect()->route('animals.show', $animal)->with('message', $animal->common_name . " has been edited succesfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index')->with('deleted-message', $animal->common_name . " has been deleted succesfully");
    }
    public function deletedIndex(){

        $animals = Animal::onlyTrashed()->get();
        return view('animals.deleted-index',compact('animals'));
    }
    public function restore(string $id){
        $animal = Animal::onlyTrashed()->findOrFail($id);
        $animal->restore();
        return redirect()->route('animals.deleted')->with('deleted-message', $animal->common_name . " has been restored succesfully");;
    }
    public function permanentDelete(string $id){
        $animal = Animal::onlyTrashed()->findOrFail($id);
        $animal->forceDelete();
        return redirect()->route('animals.deleted')->with('deleted-message', $animal->common_name . " has been deleted permanently");;
    }
}