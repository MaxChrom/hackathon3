<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        // $query = "SELECT * FROM `owners` WHERE `id` = ?" //not correct
        // $results = DB::select($query, [1]);
        
        $owners = Owner::get();
        // dd($owners);
        return view('ownersPage.owners', ['owners' => $owners]);
    }

    public function owner(Request $request, $id)
    {
        $owner = Owner::find($id);
        // dd($owner->animals[0]);
        return view('ownersPage.show', compact('owner'));
    }
}
