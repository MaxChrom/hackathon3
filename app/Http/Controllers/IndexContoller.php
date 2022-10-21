<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Animal;
use App\models\Owner;

class IndexContoller extends Controller
{

    public function searchPet(Request $request)
    {
        // no searching
        $searching = '';
        $results = [];
        $resultsOwners = [];

        if ($request->input('search_by') == 'animal') {
            // dd('searching by animal');
            if ($request->input('search')) {

                $searching = $request->input('search');
                $results = Animal::where('name', 'LIKE', '%' . $searching . '%')->get();
            } else {
                // no searching
                $searching = '';
                $results = [];
                $resultsOwners = [];
            }
        } else if ($request->input('search_by') == 'owner') {

            if ($request->input('search')) {
                $searching = $request->input('search');
                $resultsOwners = Owner::where('surname', 'LIKE', '%' . $searching . '%')->get();
            } else {
                // no searching
                $searching = '';
                $results = [];
                $resultsOwners = [];
            }
        }


        return view('homepage.index', [
            'searching' => $searching,
            'resultsOwners' => $resultsOwners,
            'results' => $results

        ]);
    }
}
