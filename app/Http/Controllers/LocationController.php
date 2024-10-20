<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LocationController extends Controller
{
    //
    public function index() {
        $locations = Location::all();
        return view('map.index', compact('locations'));
    }
    
}