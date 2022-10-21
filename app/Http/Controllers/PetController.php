<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Animal;

use Illuminate\Http\Request;

class PetController extends Controller
{
    // public function index()
    // {
    //     return view('petsPage.show');
    // }


    public function index()
    {
        $animals = Animal::orderBy('name')
            ->limit(20)
            ->get();

        // dd($animals[0]->name);

        return view('petsPage.index', compact('animals'));
    }

    public function show(Request $request, $id)
    {
        // dd("Hey, the animal ID I clicked on is: " . $id);
        $animal = Animal::find($id);
        // dd($animal->name);
        return view('petsPage.show', compact('animal'));
    }

    // public function create()
    // {
    //     return view('petsPage.create');
    // }
    // public function showAnimals()
    // {
    //     $query = "
    //         SELECT *
    //         FROM `animals`
    //         ORDER BY `name` DESC
    //         LIMIT 50
    //     ";

    //     $animals = DB::select($query);
    //     $animals = Animal::orderBy('name')
    //         ->limit(20)
    //         ->get();
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'pet-name' => 'required',
    //         'owner' => 'required',
    //         'age' => 'required|integer',

    //     ]);
    //     // POST
    //     $animal = new Animal();
    //     $animal->name = $request->input('pet-name'); // first field is the name as in SQL. the input is the "name" in the form
    //     $animal->breed = $request->input('breed');
    //     $animal->owner = $request->input('owner');
    //     $animal->age = $request->input('age');
    //     $animal->weight = $request->input('weight');
    // }
}
