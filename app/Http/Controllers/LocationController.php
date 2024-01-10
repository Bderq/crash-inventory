<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{

    public function showLocationList()
    {
        $locations = Location::all();
        return view('pages.add-warehouse', compact('locations'));
    }
    

}
