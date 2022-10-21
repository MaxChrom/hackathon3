<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Animal;

class IndexContoller extends Controller
{
    public function index()
    {
        $animals = Animal::orderBy('name')->limit(10)
            ->get();
        // dd($dogsNames);
        // return view('homepage.index', compact('animals'));
        return view('navigation', ['animals' => $animals]);
    }
}
